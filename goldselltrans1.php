<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PP_Transactions</title>
        <link rel="stylesheet" href="login2.css" />

    </head>
    <body>
        <!--Header Section View Point-->
        <header>
            <p>
                <img src="https://i.postimg.cc/zGmK73zr/Paisa-Pay-Edit-removebg.png" height=auto width=500px />
                <img src="https://i.postimg.cc/LXBxK7Tx/ads-pp.jpg" height=195px width=300px style="float: right;" />
            </p>
        </header>

        <!--DB Connection Part File with PHP-->
        <?php
        $con = mysqli_connect("localhost","root","","pp_bank");
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        ?>

        <?php
        session_start();
        $from_username = $_SESSION['from_username'];
        $entered_amount = $_POST['amount'];
        $entered_accnum = $_POST['entered_accnum'];
        $entered_pass = $_POST['password'];
        $accnum = $entered_accnum;
        $entered_name = $from_username;

        $query = "SELECT accnum,balance FROM user_details WHERE username='$from_username' and pass='$entered_pass'";
        $result = $con->query($query);
        #echo "$from_username";
        if ($result->num_rows > 0) {
            $bool = TRUE;
            while($row = $result->fetch_assoc()) {
                $from_accnum = $row["accnum"];
                $from_balance = $row["balance"];
            }
        } else {
            $bool = FALSE;
            echo "Invalid User";
        }
        $query = "SELECT balance FROM `user_details` WHERE accnum=$entered_accnum";
        $result = $con->query($query);
        if ($result->num_rows > 0) {
            $bool = TRUE;
            while($row = $result->fetch_assoc()) {
                $to_balance = $row["balance"];
            }
        } else {
        $bool = FALSE;
            echo "Invalid reciever";
        }

        if($from_balance >= $entered_amount && $bool === TRUE){
            $from_updated_balance = $from_balance - 0.03*$entered_amount - $entered_amount;
            $to_updated_balance2 = $to_balance + $entered_amount;
            #echo "Transaction successful!";
        }
        else{
            echo "Balance not enough";
        }

        date_default_timezone_set("Asia/Kolkata");
        $tdate = date("d/m/Y");
        $ttime = date("h:i:sa");
        if ($bool === TRUE){
        $sql = "UPDATE user_details SET balance=$from_updated_balance WHERE username='$from_username'";
        if ($con->query($sql) === TRUE) {
        echo "";
        } else {
            echo "Error updating record: " . $con->error;
        }

        $sql = "UPDATE user_details SET balance=$to_updated_balance2 WHERE accnum=$entered_accnum";
        if ($con->query($sql) === TRUE) {
        echo "";
        } else {
            echo "Error updating record: " . $con->error;
        }

        $randnum = rand(10000,100000);

        $accounttrans = "Account";

        $goldamts = $entered_amount*0.03-$entered_amount;

        $sql = "INSERT INTO goldtrans (tid,tfrom,tto,tdate,ttime,tamount,transmode,goldamt) VALUES ($randnum,'$from_accnum','$entered_accnum','$tdate','$ttime',$entered_amount,'$accounttrans','$goldamts')";
            if (mysqli_query($con,$sql))
                echo "";
            else {
            echo "Transaction failed" . $con->error;
        }

        $sql = "INSERT INTO transactions (tid,tfrom,tto,tdate,ttime,tamount,transmode) VALUES ($randnum,'$from_accnum','$entered_accnum','$tdate','$ttime',$entered_amount,'$accounttrans')";
        if (mysqli_query($con,$sql))
            echo "";
        else
            die('Error: ' . mysqli_error());
            $con->close();
            }else{
            echo "Transaction failed";
            }
            include "goldtransaction2.php";
            include "login21Frame.php";

        ?>
    </body>
</html>
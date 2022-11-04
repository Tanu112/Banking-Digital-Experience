<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PP_Transactions</title>
        <link rel="icon" href="https://i.postimg.cc/gJXcHKyx/iconpg.jpg" />
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

        <form action="login21Frame.php" name="myForm" onsubmit="return namevalidate()" method="post">
        <!--Header Menu List -->
        <ul>
            <li><a class="active" href="#">Back</a></li>
        </ul>
        
        <br>

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
        $entered_mobilenum = $_POST['entered_mobilenum'];
        $entered_pass = $_POST['password'];
        $mobilenum = $entered_mobilenum;
        $entered_name = $from_username;

        $query = "SELECT accnum,mobilenum,balance FROM user_details WHERE username='$from_username' and pass='$entered_pass';";
        $result = $con->query($query);
        if ($result->num_rows > 0) {
            $bool = TRUE;
            while($row = $result->fetch_assoc()) {
                $from_accnum = $row["accnum"];
                $from_mobilenum = $row["mobilenum"];
                $from_balance = $row["balance"];
            }
        } else {
            $bool = FALSE;
            echo "Invalid User";
        }
        $query = "SELECT balance FROM `user_details` WHERE mobilenum=$entered_mobilenum";
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
            $from_updated_balance = $from_balance - $entered_amount;
            $to_updated_balance2 = $to_balance + $entered_amount;
            echo "Transaction successful!";
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

        $sql = "UPDATE user_details SET balance=$to_updated_balance2 WHERE mobilenum=$entered_mobilenum";
        if ($con->query($sql) === TRUE) {
        echo "";
        } else {
            echo "Error updating record: " . $con->error;
        }

        $randnum = rand(10000,100000);

        $accounttrans = "Mobile";

        $sql = "INSERT INTO transactions (tid,tfrom,tto,tdate,ttime,tamount,transmode) VALUES ($randnum,'$from_accnum','$entered_mobilenum','$tdate','$ttime',$entered_amount,'$accounttrans')";
        if (mysqli_query($con,$sql))
            echo "";
        else
            die('Error: ' . mysqli_error());
            $con->close();

            }else{
            echo "Transaction failed";
            }
            include "mobiletransaction2.php";

        ?>
    </body>
</html>
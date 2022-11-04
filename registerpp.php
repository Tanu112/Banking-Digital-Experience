<!DOCTYPE HTML>
<html>
    <head>

    </head>

    <body>

    <?php
    $host="localhost";
    $user="root";
    $password="";
    $connect=mysqli_connect($host,$user,$password,"pp_bank");
    if(!$connect){
    echo "not connected to server";
    }
    if(!mysqli_select_db($connect,"pp_bank")){
    echo "database not selected";
    }

    session_start();
    $accnum = $_SESSION["acc_num"];
    $cifnum = $_SESSION["cif_num"];
    $mobnum = $_SESSION["mob_num"];

    $username = $_POST["fname"];
    $pass = $_POST["password2"];

    $query = "SELECT fname,lname,balance FROM `user_details` WHERE accnum=$accnum";
    $result = $connect->query($query);
    if ($result->num_rows > 0) {
    $bool = TRUE;
        while($row = $result->fetch_assoc()) {
            echo "";
            $fname = $row["fname"];
            $lname = $row["lname"];
            $balance = $row["balance"];
        }
    } else {
    $bool = FALSE;
        echo "Invalid User";
    }

    if ($bool === TRUE){

    $sql1 = "DELETE FROM user_details WHERE accnum=$accnum";
    if ($connect->query($sql1) === TRUE) {
        echo "";
    } else {
        echo "Error deleting record: " . $connect->error;
    }

    $sql = "INSERT INTO user_details (accnum,fname,lname,mobilenum,balance,username,pass,cifnum)
            VALUES ($accnum,'$fname','$lname',$mobnum,'$balance','$username','$pass',$cifnum)";
    if (mysqli_query($connect,$sql))
        include "registerpp1.php";
    else
        die('Error: ' . mysqli_error());

    }
    mysqli_close($connect);
    ?>

    </body>
</html>
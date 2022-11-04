<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PP Login.in</title>
        <meta data = "utf-8"/>
        <link rel="icon" href="https://i.postimg.cc/gJXcHKyx/iconpg.jpg" />
        <link rel="stylesheet" href="login.css" />

    </head>

    <body>
        <?php
            $con = mysqli_connect("localhost","root","","pp_bank");
            if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        ?>

        <?php
            $entered_name = $_POST['name'];
            $entered_pass = $_POST['password'];

            date_default_timezone_set("Asia/Kolkata");
            $ldate = date("d/m/Y");
            $ltime = date("h:i:sa");
            $sql = "INSERT INTO login_details (username,logdate,logtime) VALUES ('$entered_name','$ldate','$ltime')";
            if (mysqli_query($con,$sql))
                echo "";
            else
            die('Error: ' . mysqli_error());
                $query = "SELECT * FROM `user_details` WHERE username='$entered_name' and pass='$entered_pass'";
                $result = mysqli_query($con,$query) or die(mysql_error());
                $rows = mysqli_num_rows($result);
                $check = mysqli_fetch_array($result);
            if(isset($check)){
                include "login2Frame.php";
            }else{
             include "loginfailure.php";
            }
        ?>

    </body>
</html>
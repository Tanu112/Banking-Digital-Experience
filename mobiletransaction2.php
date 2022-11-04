<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PP_Transactions</title>
        <link rel="icon" href="https://i.postimg.cc/gJXcHKyx/iconpg.jpg" />
        <link rel="stylesheet" href="login2.css" />

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
    $query = "SELECT accnum,fname FROM `user_details` WHERE username='$entered_name'";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $fname = $row["fname"];
            $accnum = $row["accnum"];
        }
    } else {
        echo "0 results";
    }

    //$query2 = "SELECT tid,tto FROM `transactions` WHERE username='$entered_name'";
    $query2 = "SELECT * FROM transactions ORDER BY tid DESC LIMIT 1";
    $result = $con->query($query2);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $tidd = $row["tid"];
            $ttod = $row["tto"];
        }
    } else {
        echo "0 results";
    }

    session_destroy();
    session_start();
    $_SESSION['from_username'] = $entered_name;
    $_SESSION['from_accnum'] = $accnum;

    ?>

    <div>
      <center>
          <br>
          <br>
      <form action="login1Frame.php" name="myForm" method="post">
      <br><br>
        <h1>You are LOGGED IN <?php echo $fname?></h1>
        <br>
        <h3>Your Transaction has successfully completed</h3>
        <br>
        <h3>New record created successfully. Transaction Detial is: <?php echo $tidd ?> </h3>
        <br><br>
        <br><br><br>
        <br><br><br>
      <input class="btn" type="Submit" name="submit" value="Back"  />
      <br><br>
      </form>
      </center>
    </div>

    </body>
</html>
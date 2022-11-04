<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PP_Transactions</title>
        <link rel="stylesheet" href="login2.css" />
    </head>
    <body>

        <!--Header Menu List -->
        <ul>
            <li><a class="active" href="service.php">Service</a></li>
            <li><a href="mobiletransaction.php">Mobile Banking</a></li>
            <li><a href="#contact">Bill Payment</a></li>
            <li><a href="#about"> PaisaPayLoan</a></li>
            <li><a href="goldtransaction.php">Digital Gold</a></li>
            <li><a href="transaction.php">Transactions</a></li>
            <li><a href="transactionhistory.php">Transactions History</a></li>
            <li><a href="#about">Deposite History</a></li>
            <li><a href="#about">Loans</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
        
        <br>

        <marquee>Call us toll free on 1800 1234 and 1800 2100 and get a wide range of services through PaisaPay Contact Centre   |   For added security, new functionality to maintain per day and per transaction limit for general merchant payment transactions has been implemented. Please visit Define Limit under profile section.   |   For booking Forex trades with ease, use Fx-Retail. For more information, reach out to your Regional Treasury Marketing Unit.   |   Register yourself for Doorstep banking services on 18001037188 / 18001213721 or log on to psbdsb.in and avail the services. Stay Home, Stay Safe.   |   PaisaPay never asks for your Card/PIN/OTP/CVV details on phone, message or email. Please do not click on links received on your email or mobile asking your Bank/Card details.</marquee>

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
    $query2 = "SELECT * FROM goldtrans ORDER BY tid DESC LIMIT 1";
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
      <form action="login.php" name="myForm" method="post">
      <br><br>
        <h1>You are LOGGED IN <?php echo $fname?></h1>
        <br>
        <h3>Your Transaction has successfully completed</h3>
        <br>
        <h3>New record created successfully. Transaction Detial is: <?php echo $tidd ?> </h3>
        <br><br>
        <br><br><br>
        <br><br><br>
      <input class="btn" type="Submit" name="submit" value="Logout"  />
      <br><br>
      </form>
      </center>
    </div>

    </body>
</html>
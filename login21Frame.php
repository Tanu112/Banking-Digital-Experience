<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PP Login.in</title>
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
            <li><a class="active" href="service.php">Service</a></li>
            <li><a href="mobiletransaction.php">Mobile Banking</a></li>
            <li><a href="paisapayloan.php"> PaisaPayLoan</a></li>
            <li><a href="goldtransaction.php">Digital Gold</a></li>
            <li><a href="transaction.php">Transactions</a></li>
            <li><a href="transactionhistory.php">Transactions History</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
        
        <br>

        <marquee>Call us toll free on 1800 1234 and 1800 2100 and get a wide range of services through PaisaPay Contact Centre   |   For added security, new functionality to maintain per day and per transaction limit for general merchant payment transactions has been implemented. Please visit Define Limit under profile section.   |   For booking Forex trades with ease, use Fx-Retail. For more information, reach out to your Regional Treasury Marketing Unit.   |   Register yourself for Doorstep banking services on 18001037188 / 18001213721 or log on to psbdsb.in and avail the services. Stay Home, Stay Safe.   |   PaisaPay never asks for your Card/PIN/OTP/CVV details on phone, message or email. Please do not click on links received on your email or mobile asking your Bank/Card details.</marquee>

        
        <!--PHP Section-->
        <?php
        session_start();
        $entered_name = $_SESSION['from_username'];
        $accnum = $_SESSION['from_accnum'];
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
        ?>
        <br><br><br>
        <center>
                <br><br><br>
                <h1>Welcome to PP ONLINE DIGITALIZED BANK - <i><b><?php echo $fname?></h1></b></i><br>
                <h1>You Have Successfully Logged IN</h1><br>
                <h3>This Page is secure area.<br><br>Continue your Process</h3><br><br>

                <input class="btn" type="submit" name="submit" value="Continue"  /> <button class="btn">Logout</button>
                <br><br><br>
            
        </center>
            <footer>
                <p>© PAISAPAY_PAYMENT_GATEWAY (APM Id:Serv_Tran_564)<a href="https://retail.onlinesbi.com/sbijava/retail/html/Terms_of_Use.html" style="float: right; color:white" >Terms of Service (Terms & Conditions)</a></p>
            </footer>
        </form>
    </body>
</html>
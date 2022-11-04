<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PP_Transactions</title>
        <link rel="stylesheet" href="Tlogin.css" />
    </head>
    <body>

        <?php
            session_start();
            $entered_name = $_SESSION['from_username'];
            $accnum = $_SESSION['from_accnum'];
        ?>

        <!--Header Section View Point-->
        <header>
            <p>
                <img src="https://i.postimg.cc/zGmK73zr/Paisa-Pay-Edit-removebg.png" height=auto width=500px />
                <img src="https://i.postimg.cc/LXBxK7Tx/ads-pp.jpg" height=195px width=300px style="float: right;" />
            </p>
        </header>

        <!--Header Menu List -->
        <ul>
            <li><a class="active" href="login21Frame.php">Back</a></li>
        </ul>

        <marquee width="100%" direction="up" height="100px" scrollamount="1" style="color:red; font-size: 20px">
        <center>
            Never believe loan offers made by people on their own through telephones/emails, etc.<br><br>
            Never make any payment against such offers or share any personal/financial credentials against such offers without cross-checking that it is genuine through other sources.<br><br>
            Never click on links sent through SMS / emails or reply to promotional SMS / emails.<br><br>
            Never open/respond to emails from unknown sources containing suspicious attachments or phishing links.
        </center>
        </marquee>

        <center>
            <!--Text Input Fields -->
            <pre>
                    
            <h4> Online Transaction</h4>

            <form action="transaction1.php" name="myForm" method="post">
                <label for="fname">Account number of Reciever*</label>   <input id= "greybg" type="number" id="entered_accnum" name="entered_accnum" minlength="10" maxlength="10" pattern="[0-9]{10}" placeholder="Enter 10-digit number" value="" required><br>
                <label for="fname">Amount*</label>                                 <input id= "greybg" type="number" id="amount" name="amount"  value="" required><br>
                <label for="password">Confirm your Password*</label>           <input id= "greybg" type="Password" id="password" name="password" value="" required>
                <br><br>
                <input class="btn" type="Submit" name="submit" value="Confirm Transaction"  />         <input class="btn" type="Reset" name="reset" value="Reset"  />
            </form>         
            </pre>
        </center>

        <marquee>
            <img class="mySlides" src="https://i.postimg.cc/B6Q1xqhV/DIGITAL-BANKING-INDIA.png" style="width:60%; height:50%">
            <img class="mySlides" src="https://i.postimg.cc/908p2HZS/36142856366cd173fe60f7a59b1be760.jpg" style="width:20%; height:250px">
            <img class="mySlides" src="https://i.postimg.cc/sXBYqYSr/5fbc99710560ee6d9c6ea871-n26-smart.png" style="width:20%; height:250px">
        </marquee>
    </body>
</html>
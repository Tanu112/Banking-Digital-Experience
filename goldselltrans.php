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
        <br><br><br><br>

        <center>
        <h4>Sell Gold Section</h4>
        <br>

        <center>
            <!--Text Input Fields -->
            <pre>
            
            <form action="goldselltrans1.php" name="myForm" method="post">
                <label for="fname">Account number*</label>   <input id= "greybg" type="number" id="entered_accnum" name="entered_accnum" minlength="10" maxlength="10" pattern="[0-9]{10}" placeholder="Enter 10-digit number" value="" required><br>
                <label for="fname">Count of Gold to be Sell*</label>                                 <input id= "greybg" type="number" id="amount" name="amount"  value="" required><br>
                <label for="password">Confirm your Password*</label>           <input id= "greybg" type="Password" id="password" name="password" value="" required>
                <br><br>
                <input class="btn" type="Submit" name="submit" value="Confirm Transaction"  />         <input class="btn" type="Reset" name="reset" value="Reset"  />
            </form>
            </pre>
        </center>
    </body>
</html>
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
        <h4>Buy Online Detail Gold Bank</h4>
        <br>
        <table>
            <tr style ="font-size: 30px;">
                <td>Gold</td>
                <td>..</td>
                <td>
                    <?php
                    echo date("d/m/y");
                    ?>
                </td>
                <td>..</td>
                <td>
                    <?php
                    echo date("l");
                    ?>
                </td>
                <td>..</td>
                <td>
                    <p>Location : INDIA</p>
                </td>
                <td>
                    <p>GOLD RATE :	&#8377;5,188 *Today (INR) <span style="color: red;">&darr;<span></p>
                </td>
                <td>
                    <img src="https://i.postimg.cc/Kjb8fD9T/digital-gold-og-image.png" width="150px" height="100px"/>
                </td>
            </tr>            
        </table>

        <br><br><br><br>

        <table>
            <tr>
                <td>
                    <img src="https://i.postimg.cc/C1hFfxdC/image.jpg" width="200px" height="180px"/>
                </td>
                <td></td>
                <td>
                    <b style="font-size: 25px;">Bureau of Indian Standards (BIS) certifies the purity and quality of gold</b>
                </td>
            </tr>
        </table>

        </center>

        <center>
            <!--Text Input Fields -->
            <pre>
            
            <form action="goldtransaction1.php" name="myForm" method="post">
                <label for="fname">Account number of Reciever*</label>   <input id= "greybg" type="number" id="entered_accnum" name="entered_accnum" minlength="10" maxlength="10" pattern="[0-9]{10}" placeholder="Enter 10-digit number" value="" required><br>
                <label for="fname">Amount*</label>                                 <input id= "greybg" type="number" id="amount" name="amount"  value="" required><br>
                <label for="password">Confirm your Password*</label>           <input id= "greybg" type="Password" id="password" name="password" value="" required>
                <br><br>
                <input class="btn" type="Submit" name="submit" value="Confirm Transaction"  />         <input class="btn" type="Reset" name="reset" value="Reset"  />
            </form>

            </pre>
            <a href="goldselltrans.php"><button class="btn">Sell Gold</button></a>
        </center>
    </body>
</html>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login_PaisaPay.in</title>
        <meta data = "utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong"/>
        <link rel="icon" href="https://i.postimg.cc/gJXcHKyx/iconpg.jpg" />
        <link rel="stylesheet" href="login.css" >
    </head>

    <body>
        <!--Header Section View Point-->
        <header>
            <p>
                <img src="https://i.postimg.cc/zGmK73zr/Paisa-Pay-Edit-removebg.png" height=auto width=500px />
                <img src="https://i.postimg.cc/LXBxK7Tx/ads-pp.jpg" height=195px width=300px style="float: right;" />
            </p>
        </header>

        <!--Header Menu List -->
        <ul>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="https://rbi.org.in/Scripts/BS_PressReleaseDisplay.aspx">RBI News</a></li>
        </ul>

        <!--Login Session-->
        <center>
            <h2>Login to Online <b style="color: #ff0030;">PAISAPAY.in</b></h2>

            <marquee direction="left to right" style="color: red; font-size: 20px;"/>Enjoy the higher quality user experience screens. If you face any alignment issue,kindly clear browser history completely and refresh the page.</marquee>
            <pre>
                <form action = "login1Frame.php" name = "myForm" onsubmit = "return namevalidate()" method = "POST">
                        <label for = "fname"><b style="font-size: 20px; font-family: Trirong, serif;">User Name :   <b></label> <input id= "greybg" type="text" id="name" name="name" placeholder="Enter Your Username" value="" required />
                        <label for="password"><b style="font-size: 20px; font-family: Trirong, serif;">            Password :   <b></label> <input id= "greybg" type="Password" id="password" name="password" placeholder="Enter Your Password" value="" required />
                        <input class="btn" type="Submit" name="submit" value="Login"  />         <input class="btn" type="Reset" name="reset" value="Reset"  />
                </form>
            </pre> 
            <a href="registeraccount.php"><font class="loginpage" >New User ? Register here</font></a>
            <br>
            <a href="#"><font class="loginpage">Forgot Login Password</font></a>
        </center>

        
        <div class="footer-content">
            <footer>
                <h3>PAISAPAY<sup>TM</sup>.in</h3>
                <p>© PAISAPAY_PAYMENT_GATEWAY (APM Id:Serv_Tran_564)<a href="rbi.org.in/scripts/BS_ViewMasCirculardetails.aspx?id=5130" style="float: right; color:white" >Terms of Service (Terms & Conditions)</a></p>
            <footer>
        </div>     

    </body>

</html>
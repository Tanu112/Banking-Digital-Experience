<!DOCTYPE html>
<html>
    <head>
        <title>New User UPPay </title>
        <meta data = "utf-8">
        <link rel="icon" href="https://i.postimg.cc/gJXcHKyx/iconpg.jpg">
        <link rel="stylesheet" href="login.css">

        <script>
        function checkPassword(form) {
                        password1 = form.password1.value;
                        password2 = form.password2.value;

                        // If password not entered
                        if (password1 == '')
                            alert ("Please enter Password");

                        // If confirm password not entered
                        else if (password2 == '')
                            alert ("Please enter confirm password");

                        // If Not same return False.
                        else if (password1 != password2) {
                            alert ("\nPassword did not match: Please try again...")
                            return false;
                        }

                        // If same return True.
                        else{

                            return true;
                        }
                    }

        </script>

    </head>
    <body class= "formsbody">

        <?php
        session_start();
        $_SESSION['acc_num'] = $_POST['accnum'];
        $_SESSION['cif_num'] = $_POST['cifnum'];
        $_SESSION['mob_num'] = $_POST['mobnum'];
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
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>

        <center>

        <br><br>
        <h2> Create Online PP_Account</h2>
        <pre>
            <form action="registerpp.php" onSubmit = "return checkPassword(this)" name="myForm"  method="post">
                <label for="fname" style="font-size: 20px; font-family: Trirong, serif;">Enter User name :</label>            <input id= "greybg" type="text" id="fname" name="fname" value="" required><br>
                <label for="password" style="font-size: 20px; font-family: Trirong, serif;">Enter Password : </label>             <input id= "greybg" type="Password" id="password1" name="password1" minlength="6" Placeholder="Minimum 6 Characters" autocomplete="new-password" required /><br>
                <label for="password" style="font-size: 20px; font-family: Trirong, serif;">Re-Enter Password : </label>         <input id= "greybg" type="Password" id="password2" name="password2" minlength="6" Placeholder="Minimum 6 Characters" required><br><br>
                <input class="btn" type="Submit" name="submit" value="Create Account"   />            <input class="btn" type="Reset" name="reset" value="Reset"  />

        </pre>
        <br><br>

        <center>
    
        <footer>
        <p>© PAISAPAY_PAYMENT_GATEWAY (APM Id:Serv_Tran_564)<a href="https://retail.onlinesbi.com/sbijava/retail/html/Terms_of_Use.html" style="float: right; color:white" >Terms of Service (Terms & Conditions)</a></p>
        </footer>
        </form>
    </body>
</html>

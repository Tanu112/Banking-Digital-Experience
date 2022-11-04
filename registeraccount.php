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
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>

        <form action="createaccount.php" name="myForm" method="post">
        <table border="0" width=100% align= "center" cellspacing="15" id="table1">
            <tr><th colspan=4 id="greybigfont">User Driven Registration - New User</th></tr>
            <tr>
                <td colspan=1>Account Number*</td>
                <td colspan=1><input id= "greybg" type="text" id="accnum" name="accnum" minlength="10" maxlength="10" pattern="[0-9]{10}" placeholder="10-digit number" required></td>
                <td colspan=2> (Account Number is available in your passbook and/or statement of account)</td>
            </tr>
            <tr>
                <td colspan=1>CIF Number*</td>
                <td colspan=1><input id= "greybg" type="text" id="cifnum" name="cifnum" minlength="11" maxlength="11" pattern="[0-9]{11}" placeholder="11-digit number" required></td>
                <td colspan=2>  (CIF Number is available in your passbook and/or statement of account)</td>
            </tr>
            <tr>
                <td colspan=1>Branch Code*</td>
                <td colspan=1><input id= "greybg" type="text" id="branchnum" name="branchnum" maxlength="5" pattern="[0-9]{5}" placeholder="5-digit number" required></td>
                <td colspan=2>   (Please enter 5 digit branch code )</td>
            </tr>
            <tr>
                <td colspan=1>Country</td>
                <td colspan=1><input id= "greybg" type="text" id="country" name="country" value="" ></td>
                <td colspan=2>  </td>
            </tr>
            <tr>
                <td colspan=1>Registered Mobile Number*</td>
                <td colspan=1><input id= "greybg" type="text" id="mobnum" name="mobnum" pattern="[7-9]{1}[0-9]{9}" value="" required></td>
                <td colspan=2>   (Please enter Mobile Number registered with Bank)</td>
            </tr>
            <tr>
                <td colspan=1>Facility Required*</td>
                <td colspan=1><select name="rights" id="cars">
                    <option value="ftr">Full Transaction Rights</option>
                    <option value="lr">Limited Rights</option>
                    <option value="vr">View Rights</option>
                </select></td>
                <td colspan=2> (Select Transaction Rights) </td>
            </tr>
            <tr>
                <td colspan=4 style="text-align: center">
                <input class="btn" type="Submit" name="submit" value="Submit"  />
                <input class="btn" type="Reset" name="reset" value="Reset"  />
                </td>
            </tr>

</form>
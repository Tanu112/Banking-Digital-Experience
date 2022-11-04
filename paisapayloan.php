<!DOCTYPE HTML>
<html>
    <head>
        <title>PaisaPay Loan</title>
        <meta data = "utf-8">
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
        <center><h1>APPLY LOAN ON PaisaPay - Loan Application</h1>
        
        <img src="https://i.postimg.cc/g0FYKKtK/image.jpg" width="auto"/>
        
        </center>
        <center>
        <form action="pdf.php" method="POST">
            
        <pre>

        <strong style="font-size:20px;">Basic Personal Details</strong>
        <p style="font-size:16px;">This information is used by lenders to determine approval, loan amount eligibility and, if approved, where to send the funds. View <a href="">privacy policy</a>.</p>


        Name                    <input type="text" placeholder="name" name="fname" required/>

        Phone number            <input type="text" placeholder="Phone_number" name="Phone_number">

        Email address           <input type="text" placeholder="email" name="email">

        Contact Number          <input type="text" name="telephone">
                
        Home Address              <input type="text" name="address">  

        Marital Status          <input type="text" name="marital">

        <hr>

        <strong style="font-size:20px;">Employee Information</strong>
        <p style="font-size:16px;">By submitting your information, you certify that you are a US resident, at least 18 years of age and agree to the terms of our </p>

        Current Occupation      <input type="text" name="jobname">  

        Employer name           <input type="text" name="empname">  

        Company Address         <input type="text" name="companyaddress">  

        <hr>

        <strong style="font-size:20px;">Loan Type Details</strong>

        Loan Type              <input type="text" name="loantype">  

        Lenght of the Loan      <input type="text" name="loanlenght">  

        <hr>

        <strong style="font-size:20px;">Comment Section</strong>

        Comment                 <textarea name='comment' name='comment' required></textarea>

        <hr>
          
            <input class="btn" type="submit" id="button" name="submit">

            </pre>
        </form>
        </center>
    </body>
</html>
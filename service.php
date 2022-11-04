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


        <br>

        <table width="100%">
            <tr style="background-color:coral; width= 100%">
                <center>
                    <td>
                        <h1 style="color:lightcyan; background-color:coral">PAYMENTS/TRANSFER<h1>
                    </td>
                    <td>
                        <img src="https://i.postimg.cc/mgCnHx1y/OH3E9S0.jpg" height=130px/>
                    </td>
                </center>
            <tr>
                
            <tr>
                <td>
                    <h2>Funds Transfer</h2>
                    <br><br>
                        <p style="font-size: 150%;">&#10004;     Transfer funds within your own accounts</p>
                        <p style="font-size: 150%;">&#10004;     Transfer funds to third party account held in the same bank</p>
                        <p style="font-size: 150%;">&#10004;     Make an Inter bank funds transfer to any account held in any bank including PaisaPay<sup>TM</sup> Group </p>
                        <p style="font-size: 150%;">&#10004;     Pay any VISA credit card bill </p>
                        <p style="font-size: 150%;">&#10004;     Transfer funds to religious and Charitable institutions </p>
                        <p style="font-size: 150%;">&#10004;     Record standing instructions to transfer a fixed amount at a scheduled frequency for a period not exceeding one year </p>
                        <p style="font-size: 150%;">&#10004;     Transfer funds to NRE PIS accounts to facilitate online trading </p>
                        <br><br>
                        <br>
                </td>
                </center>
            <tr>

            <tr>
                <td>
                    <h2>Intra-Bank Transfer</h2>
                    <br><br>
                        <p style="font-size: 150%;">&#10004;     Inter Bank Transfer enables electronic transfer of funds from the account of the remitter in one Bank to the account of the beneficiary maintained with any other Bank branch. There are two systems of Inter Bank Transfer – RTGS and NEFT. Both these systems are maintained by Reserve Bank of India.</p>
                        <br><br>
                        <br>
                </td>
            </tr>

            <tr>
                <td>
                    <h2>RTGS / NEFT</h2>
                    <br><br>
                        <p style="font-size: 150%;">&#10004;     <strong>RTGS- Real Time Gross Settlement -</strong> This is a system where the processing of funds transfer instructions takes place at the time they are received (real time). Also the settlement of funds transfer instructions occurs individually on an instruction by instruction basis (gross settlement). RTGS is the fastest possible interbank money transfer facility available through secure banking channels in India. </p><br><br>
                        <p style="font-size: 150%;">&#10004;     <strong>NEFT- National Electronic Fund Transfer -</strong> This system of fund transfer operates on a Deferred Net Settlement basis. Fund transfer transactions are settled in batches as opposed to the continuous, individual settlement in RTGS. Presently, NEFT operates in half hourly batches. There will be 48 half-hourly batches every day. The settlement of first batch will commence after 00:30 hours and the last batch will end at 00:00 hours. The system will be available on all days of the year, on a 24 x 7 basis, including holidays.</p>
                        <br><br>
                        <br>
                </td>
            </tr>

            <tr>
                <td>
                    <h2>E-TDR/e-STDR</h2>
                    <p style="font-size: 150%;">&#10004;    Minimum tenure is 7 days for TDR and 180 days for STDR and Maximum tenure is 3650 days for TDR and STDR.</p>
                </td>
            </tr>
        </table>
        
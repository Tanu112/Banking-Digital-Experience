<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>PP_Transactions</title>
        <link rel="stylesheet" href="Tlogin.css" />
        <link rel="icon" href="https://i.postimg.cc/gJXcHKyx/iconpg.jpg" />
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
                <img src="https://i.postimg.cc/LXBxK7Tx/ads-pp.jpg" height=194px width=300px style="float: right;" />
            </p>
        </header>

        <!--Header Menu List -->
         <ul>
            <li><a class="active" href="login21Frame.php">Back</a></li>
        </ul>

        <center>
            <!--Display Transaction History-->
            <pre>
                    
            <h2 style="letter-spacing: 15px; font-size: 20px;">Transaction History</h2>

            <?php
            $con = mysqli_connect("localhost","root","","pp_bank");
            if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            ?>

            <?php
            session_start();
            $from_accnum = $_SESSION['from_accnum'];
            $_SESSION['loggedin_accnum'] = $_SESSION['from_accnum'];
            $_SESSION['loggedin_username'] = $_SESSION['from_username'];

            echo '<br><table id="tbl" border = "1" cellpadding = "5" cellspacing = "5">
                <tr>
                <td> <font face="Times New Roman">S.No</font> </td>
                <td></td>
                <td> <font face="Times New Roman">From Account number</font> </td>
                <td></td>
                <td> <font face="Times New Roman">To Account number</font> </td>
                <td></td>
                <td> <font face="Times New Roman">Date</font> </td>
                <td></td>
                <td> <font face="Times New Roman">Time  </font> </td>
                <td></td>
                <td> <font face="Times New Roman">Amount  </font></td>
                <td></td>
                <td> <font face="Times New Roman">Transaction Mode  </font> </td>
                </tr>';

            $count=0;
            $query = "SELECT tto,tdate,ttime,tamount,transmode FROM `transactions` WHERE tfrom=$from_accnum";
            $result = $con->query($query);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                $count+=1;
                    $field0name = $count;
                    $field1name = $from_accnum;
                    $field2name = $row["tto"];
                    $field3name = $row["tdate"];
                    $field4name = $row["ttime"];
                    $field5name = $row["tamount"];
                    $field6name = $row["transmode"];
                echo '<tr>
                <td>'.$field0name.'</td><td></td>
                <td>'.$field1name.'</td><td></td>
                <td>'.$field2name.'</td><td></td>
                <td>'.$field3name.'</td><td></td>
                <td>'.$field4name.'</td><td></td>
                <td>'.$field5name.'</td><td></td>
                <td>'.$field6name.'</td>
                </tr>';
                }
            } else {
                echo "0 results";
            }
            echo '</table><br><br>';

            ?>
 
            <input class="btn" type="button" id="btnExport" value="Export" onclick="Export()" />
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
            <script type="text/javascript">
                    function Export() {
                        html2canvas(document.getElementById('tbl'), {
                            onrendered: function (canvas) {
                                var data = canvas.toDataURL();
                                var docDefinition = {
                                    content: [{
                                        image: data,
                                        width: 500
                                    }]
                                };
                                pdfMake.createPdf(docDefinition).download("Transaction History.pdf");
                            }
                        });
                    }
                </script>

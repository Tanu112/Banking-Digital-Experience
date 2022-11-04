<?php
if(!empty($_POST['submit']))
{
    $image1 = "https://i.postimg.cc/T3FGb40S/1-3.png";
    $image2 = "https://i.postimg.cc/zGmK73zr/Paisa-Pay-Edit-removebg.png";
    $f_name = $_POST['name'];
    $phone = $_POST['Phone_number'];
    $email = $_POST['email'];
    $mobile = $_POST['telephone'];
    $address = $_POST['address'];
    $status = $_POST['marital'];
    
    //Employee
    $jobname=$_POST['jobname'];
    $empname=$_POST['empname'];
    $compname=$_POST['companyaddress'];

    //loan Details
    $loantype=$_POST['loantype'];
    $loanlen=$_POST['loanlenght'];

    //Comment 
    $comment=$_POST['comment'];

    require("fpdf/fpdf.php");
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",12);
    $pdf->Multicell(0,6,"                                                  PAISAPAY LOAN APPLICATION FORM");
    $pdf->Multicell(0,6,"                                                               Contact us Detail");
    $pdf->Multicell(0,6,"\n\nPhone :+180065112315 E-Mail:paisapayTM@outlook.in Check Your Loan Registration Detail");
    $pdf->Multicell(0,6,"\n\n\nCandidate Name:$f_name \nYour Loan Application has Successfully Reached!!\nThank You");
    
    $pdf->Image($image1, 15, 100, 100);

    $pdf->Multicell(0,6,"                                                             BASIC PERSONAL DETAILS");

    $pdf->Cell(40,10,"First Name",1,0);
    $pdf->Cell(40,10,"Phone No.s",1,0);
    $pdf->Cell(40,10,"Home Address",1,0);
    $pdf->Cell(40,10,"Email Id",1,0);
    $pdf->cell(35,10,"Loan Recipient",1,1);

    $pdf->Cell(40,10,$f_name,1,0);
    $pdf->Cell(40,10,$phone,1,0);
    $pdf->Cell(40,10,$status,1,0);
    $pdf->Cell(40,10,$email,1,0);
    $pdf->cell(35,10,"Loan Applied",1,0);


    $file = time().'.pdf';
    $pdf->output($file,'D');
}
?>
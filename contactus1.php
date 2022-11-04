<?php
$con = mysqli_connect("localhost","root","","pp_bank");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<?php
//Declare Name = $GET or $_POST['(name_in_input_text)'];
$fname = $_GET['firstname'];
$lname = $_GET['lastname'];
$country = $_GET['country'];
$phonenum = $_GET['phonenum'];
$subject = $_GET['subject'];

$sql = "INSERT INTO contactus (fname, lname, country, phonenum, sub) VALUES ('$fname','$lname','$country', '$phonenum', '$subject')";

if (mysqli_query($con, $sql)) {
  echo "";
  include "successful.html";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
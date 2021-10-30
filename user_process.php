<?php
include("db.php");
$fname=$_POST['fname'];
$Lname=$_POST['Lname'];
$country=$_POST['country'];
$email=$_POST['email'];
$message=$_POST['message'];

//inserting data into table
$query=mysqli_query($con,"INSERT INTO contactus(fname,Lname,country,email,message)VALUES('$fname', '$Lname', '$email','$country','$message')") or die(mysqli_error($con));
mysqli_close($con);
echo '<script type="text/javascript">'; 
echo 'alert("MESSAGE submitted SUCCESSFULLY !!");'; 
echo 'window.location.href = "rss.php";';
echo '</script>';
?>

<?php
include("db2.php");
?>
<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phoneno=$_REQUEST['phoneno'];
$source=$_REQUEST['source'];
$destination=$_REQUEST['destination'];
$dates=$_REQUEST['dates'];
$adult=$_REQUEST['adult'];
$child=$_REQUEST['child'];


 $query = mysqli_query($db_connect,"INSERT INTO `bookingtickets` (`id`, `name`, `email`,`phoneno`,`source`, `destination`, `dates`, `adult`, `child`) VALUES ('','$name','$email','$phoneno','$source', '$destination', '$dates', '$adult', '$child')") or die(mysqli_error($db_connect));
mysqli_close($db_connect);
echo '<script type="text/javascript">'; 
echo 'alert("Booking sucessfull !!!");'; 
echo 'window.location.href = "dataretrive.php";';
echo '</script>';
?>

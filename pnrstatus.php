<?php 
session_start();
$conn = mysqli_connect("localhost","root","","rss");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$pnr=$_POST['pnr'];
$sql = "SELECT t_status FROM tickets WHERE PNR= '$pnr'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
	if($row==NULL)	echo "<script type='text/javascript'>alert('PNR not found');</script>";
	else echo "<script type='text/javascript'>alert('Your status is ' +'$row[t_status]');</script>";	
}
if (isset($_POST['cancel']))
{
$pnr=$_POST['pnr'];
$sql = "DELETE FROM tickets WHERE PNR=$pnr;";
if(mysqli_query($conn, $sql))
	echo "<script type='text/javascript'>alert('Your ticket has been cancelled');</script>";
	else echo "<script type='text/javascript'>alert('Cancellation failed');</script>";	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PNR Status</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style5.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
<body>
	
<div class="row">
	<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
  <div class="container-fluid">
    <h4 class="navbar-brand" id="none">ONLINE TRAIN TICKETS BOOKING</h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="rss.php">Home
</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutus">About US</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="booking.php">Booking Tickets</a>
        </li>
<li class="nav-item">
          <a class="nav-link" href="pnrstatus.php">PNR Status</a>
        </li>

    </div></ul>
    <div>
    	<ul class="navbar-nav navbar-dark" style="float: right;">
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact US</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
		
 </ul>
  </div>
</nav>
  </div>

<center>
	<form method="post" name="pnrstatus" action="pnrstatus.php">
		<p style="text-align: left; font-weight: bold;"> your PNR Number is your Phone number</p>
			<label> Check Your Status here:</label>
			<input type="text" name="pnr" size="30" maxlength="10" placeholder="Enter PNR here">
	<br/><br/>
	<input type="submit" name="submit" value="Check here!" class="btn btn-primary" id="submit"><br/><br/>
	<input type="submit" class="btn btn-info" value="Cancel your ticket!" name="cancel" id="cancel"/>
	</form></center>
</body>
</html>
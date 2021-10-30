<!DOCTYPE html>
<html lang="en">
<head>
  <title>index page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body class="bgimg">
	
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
          <a class="nav-link" href="Aboutus.php">About US</a>
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
		
		<table border="1" width="100%" height="40%" title="All recorded database of booking" align="center" id="table">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phoneno</th>
				<th>Source</th>
				<th>Destination</th>
				<th>Dates</th>
				<th>Adult</th>
				<th>Child</th>
			</tr>
<?php
include("db2.php");
error_reporting(0);
$query="select * from bookingtickets";
$data=mysqli_query($db_connect,$query);

$total=mysqli_num_rows($data);
//echo $total;

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo"
		<tr>
		<td>".$result['id']."</td>
		<td>".$result['name']."</td>
	    <td>".$result['email']."</td>
	    <td>".$result['Phoneno']."</td>
		<td>".$result['source']."</td>
		<td>".$result['destination']."</td>
		<td>".$result['dates']."</td>
		<td>".$result['adult']."</td>
		<td>".$result['child']."</td>
		</tr>
		";
	}
}

else
{
	echo "No records found!";
}
?>
</table>
</body>
</html>
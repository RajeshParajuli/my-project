<!DOCTYPE html>
<html lang="en">
<head>
  <title>contactus page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style3.css">
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
          <a class="nav-link" aria-current="page" href="rss.php">Home
</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Aboutus.php">About US</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="booking.php">Booking Tickets</a>
        </li>
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
<form name="frmcontact" method="POST" action="user_process.php">
<h2>Contact Us</h2>
<div class="row">
<div class="col-6">
	<label>Firstname:</label><input type="text" name="fname" required placeholder="enter Firstname" class="form-control"></div>
	<div class=" col-6">
		<label>Lastname:</label><input type="text" name="Lname" required placeholder="enter Lastname" class="form-control"></div>
	</div>
		<div class="formgroup">
	<label>Country:</label><input type="text" name="country" required placeholder="enter your Country" class="form-control"></div>
	<div class="formgroup">
		<label>Email:</label><input type="Email" name="email" required placeholder="enter Email" class="form-control"></div>
		<div>
		<label>Message:</label><textarea name="message" required placeholder="Type your message here..." row="50%" width="80%" class= "form-control"></textarea></div><br>
		<button type="submit" class="btn btn-warning p-2">submit</button><button type="reset" class="btn btn-success p-2">clear</button></form></center>
</form>
</body>
</html>















</body>
</html>

<?php
include("db2.php");
?>
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
  
  <link rel="stylesheet" type="text/css" href="style2.css">
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


<!-- booking form -->
 

<center><h2> Book Tickets</h2></center>

<center>
  <FORM class="form" action="bookingdata.php" method="Post">
    <TABLE  border="0" 
           cellpadding="30"  >
  <TR>
    <TD> Passenger(s) Name:</TD>
    <TD>
      <input type="text" name="name" SIZE="30" required placeholder="Enter Passenger(s) Name" class="form-control">
    </TD>
  </TR>
  <TR>
    <TD>Your E-mail address:</TD>
    <TD><input type="Email" name="email" SIZE="30" required placeholder="Enter Email" class="form-control"></TD>
  </TR>
  <TR>
    <TD>Your Phone no:</TD>
    <TD><input type="text" name="phoneno" SIZE="30" required placeholder="Enter phoneno." class="form-control"></TD>
  </TR>
<TR>
    <TD>From:</TD>
    <TD><select name="source" class="form-control"><option value="--select your station--">--select your station--</option>
      <option value="pune">pune</option>
      <option value="delhi">delhi</option>
      <option value="mumbai">Mumbai</option>
      <option value="Chennai">Chennai</option>
      <option value="New Delhi">New Delhi</option>
      <option value="anand vihar">Aand vihar</option>
        <option value="Surat">Surat</option>
        <option value="Kota">Kota</option>
      <option value="Banglore">Banglore</option></select></TD>
  </TR>
  <TR>
    <TD>To:</TD>
    <TD><select name="destination" class="form-control">
      <option value="--select your Destination--">--select your Destination--</option><option value="Mumbai">Mumbai</option>
      <option value="New Delhi">New Delhi</option>
      <option value="Surat">Surat</option>
      <option value="Banglore">Banglore</option>
      <option value="delhi">delhi</option>
      <option value="kota">Kota</option></select>
   </TD>
  </TR>
  <TR>
    <TD>Dates:</TD>
    <TD><input type="date" name="dates" id="dates" required  class="form-control">
</TD>
  </TR>
  <TR>
    <TD>No. of Adult:</TD>
    <TD><select name="adult" id="adult" required class="form-control">
      <option>0</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
</TD>
  </TR>
  <TR>
    <TD>No. of Chhild:</TD>
    <TD><select name="child" id="child" required class="form-control">
      <option>0</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option></select>
</TD>
  </TR>
</TABLE><br/><br/>
<input TYPE="SUBMIT" VALUE="BOOKING" class="btn btn-success" >
</FORM></center>

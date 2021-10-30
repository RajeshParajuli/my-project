<!DOCTYPE html>
<html>
<head>
  <title>registration page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   <link rel="stylesheet" href="style3.css">
</head>
<body class="backimg">
	
<div class="row">
	<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
  <div class="container-fluid">
    <h4 class="navbar-brand" id="none">Online Railway Reservation System</h4>
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
	<Center><FORM METHOD="POST" ACTION="#">
<TABLE BORDER="1" >
  <TR>
    <TD>Your name</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="name" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Your E-mail address</TD>
    <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Payment Amount</TD>
    <TD><INPUT TYPE="TEXT" NAME="amount" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Date:</TD>
    <TD><INPUT TYPE="Date" NAME="date" SIZE="25"></TD>
  </TR>
</TABLE>
<INPUT TYPE="SUBMIT" VALUE="Pay" NAME="B1" class="btn btn-success">
</FORM></center>

</body>
</html>
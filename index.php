 <?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `userregistration` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php

    header("Location: rss.php");
         }else {
            echo '<script>'; 
echo 'alert("Password is incorrect please Enter Correct Password !!!");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
         }
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ONLINE TRAIN TICKETS BOOKING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
<div class="row justify-content-center ">
  <h1 >ONLINE TRAIN TICKETS BOOKING</h1>

  </div>
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-7">
                <div class="card1 pb-5">
                  
            
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="images/Train.jpg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card2 card border-0 px-4 py-5">
                    
                    <div class="row px-3 mb-4">
                        <h3 class="or text-center">LOGIN</h3>
                        
                    </div>
                    
                   
                    <form action="" method="post" name="login">
                    <div class="row px-3"> <label class="mb-1">
                            <h3 class="mb-0 text-sm">User Name</h3>
                        </label> <input type="text" name="username" placeholder="Enter a Username" required class="form-control"> </div>
                    <div class="row px-3 mb-3"> <label class="mb-1">
                            <h3 class="mb-0 text-sm">Password</h3>
                        </label> <input type="password" name="password" placeholder="Enter password" required class="form-control"> </div>
                    
                    <div class="row mb-2 px-3"> <button type="submit" class="btn btn-primary">Login</button> </div>
                    <div class="row mb-4 px-3 " > <small class="font-weight-bold">Don't have an account? <a href="registration.php" class="text-danger ">Register</a></small> </div>
                  </form>
                </div>
            </div>
        </div>
        
        </div>
    </div>
<?php } ?>
</body>
</html>
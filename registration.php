<!DOCTYPE html>
<html lang="en">
<head>
  <title>Railway reservation system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
<div class="row justify-content-center">
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
                        <h3 class="or text-center">USER REGISTRATION</h3>
                        
                    </div>
                    <?php 
                    require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $phoneno=stripcslashes($_REQUEST['phoneno']);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `userregistration` (username, email, phoneno,password, trn_date)
VALUES ('$username', '$email', '$phoneno', '".md5($password)."',  '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
             echo '<script type="text/javascript">'; 
echo 'alert("registration successfully now you can login as user!!");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
    }
    }else{
?>
                    <form action="" method="post" name="login">
                    <div class="row px-3"> <label class="mb-1">
                            <h3 class="mb-0 text-sm">User Name</h3>
                        </label> <input type="text" name="username" placeholder="Enter a Username" required class="form-control" > </div>
                    <div class="row px-3 mb-3"> <label class="mb-1">
                            <h3 class="mb-0 text-sm">Email</h3>
                        </label> <input type="Email" name="email" placeholder="Enter Email" required class="form-control"> </div>

                        <div class="row px-3 mb-3"> <label class="mb-1">
                            <h3 class="mb-0 text-sm">Phone Number</h3>
                        </label> <input type="text" name="phoneno" placeholder="Enter Phone Number" required class="form-control"> </div>

                        <div class="row px-3 mb-3"> <label class="mb-1">
                            <h3 class="mb-0 text-sm">Password</h3>
                        </label> <input type="password" name="password" placeholder="Enter password" required class="form-control"> </div>
                    
                    <div class="row mb-2 px-3"> <button type="submit" class="btn btn-success">Register</button> </div>
                    
                  </form>
                </div>
                        <?php } ?>

            </div>
        </div>
        
        </div>
    </div>

</body>
</html>
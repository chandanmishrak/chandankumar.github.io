<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
  //check username is empty
  if(empty(trim($POST["username"]))){
    $username_err = "username is cannot be blank";
  }
  else{
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($link, $sql);
    if($stmt){
      mysqli_stmt_bind_param($stmt)
    }
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="profile.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Chandan-km-singup here</title>
  </head>
  <body>
    <section class="login-block">
        <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center"><span class="r">R</span>egister <span class="n">N</span>ow</h2>
                <form class="login-form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Email</label>
                        <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email">

        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Create Username">

            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Choose strong password">

                <div class="form-group">
                    <label for="exampleInputEmail1">C-Password</label>
                    <input type="password" class="form-control" placeholder="C-password">
        
      </div>
     
      
      <button type="submit" class="btn btn-login float-left">Create Account</button>
      
      <br>
      <div class="text-center mt-5">Do you have already Account?<a href="login.php" class="lf">Login</a></div>
    </form>
    <div class="copy-text">copyright&copy;2021by <a href="index.php">chandan-km/ back-home</a></div>
            </div>
            
        </div>
    </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
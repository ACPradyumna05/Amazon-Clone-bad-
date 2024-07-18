<?php
session_start();
require_once("./includes/dbconnection.php");
$msg="";
if(isset($_POST["login"]))
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    $autquery="select userid,name from userprof where email='$email' and password='$password'";
    $rs=mysqli_query($con,$autquery);
    if(mysqli_num_rows($rs)==1){
        $row=mysqli_fetch_row($rs);
        $_SESSION["userid"]=$row[0];
		$_SESSION["name"]=$row[1];
		header("location:profilepage.php");

    }
    else{
        $msg="invalid";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="LoginStyle.css">
</head>
<body>
    <div class="create-account-container">
        <div class="amazonlogo">
            <a href="frontpage.php">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon Logo" width="100">
            </a>
    </div>
        <div class="row justify-content-center">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-3 col-md-offset-5">
            <div class="card">
<div class="card-body">
        <h2 class="text-center">Sign In</h2>
        <form method="post" role="form" action="">
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email Address">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="At least 6 characters">
                <small class="form-text text-muted">Passwords must be at least 6 characters.</small>
            </div>
            <button type="submit" name= "login" class="btn btn-warning btn-block">Sign In</button>
            <br>
            <div class="form-group">
                <p>New to Amazon? <a href="RegPG.php">Create an Account</a></p>
            </div>
            <p class="footer">By creating an account or logging in, you agree to Amazon's <a href="#">Conditions of Use</a> and <a href="#">Privacy Policy</a>.</p>
        </form>
        </div>
    </div>
    </div>
    </div>

</div>

    <footer id="footer" class="text-center fixed-bottom bg-light border-top">
        <a href="#">Conditions of Use</a> | 
        <a href="#">Privacy Notice</a> | 
        <a href="#">Help</a>
        <p>&copy; 1996-2024, Amazon.com, Inc. or its affiliates</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

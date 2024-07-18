<?php
if(isset($_POST["register"]))
{
    $conn=mysqli_connect("localhost","root","","amazon") or die("connection error");
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $mobno=$_POST["mobile"];
    $insertqry="insert into userprof(name,email,mobileno,password) values('$name','$email','$mobno','$password')";
    mysqli_query($conn,$insertqry);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Create Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="RegStyle.css">
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
        <h2 class="text-center">Create Account</h2>
        <form method="post" role="form" action="">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="First and last name">
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile number</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <select class="form-control">
                            <option value="IN">IN +91</option>
                            <!-- Add more country codes as needed -->
                        </select>
                    </div>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile number">
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="At least 6 characters">
                <small class="form-text text-muted">Passwords must be at least 6 characters.</small>
            </div>
            <button type="submit" name="register" class="btn btn-warning btn-block">Register</button>
            
            
            <br>
            <div class="form-group">
                <p>Already have an account? <a href="LoginPG.php">Sign in</a></p>
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
<?php
require_once("./includes/dbconnection.php");
session_start();
if(!isset($_SESSION["userid"]))
{
	header("location:LoginPG.php");
}
else if(isset($_POST["update"]))
{
    $name=$_POST["fullname"];
	$email=$_POST["email"];
	$mobilenumber=$_POST["mobile"];
	$updateqry="update userprof set name='$name',mobileno=$mobilenumber where email='$email'";
	mysqli_query($con,$updateqry);
	echo("welcome $_SESSION[name]");
	$qry="select name,email,mobileno,date from userprof where userid=$_SESSION[userid]";
	$rs=mysqli_query($con,$qry);
	$row=mysqli_fetch_row($rs);
}
else
{
	echo("welcome $_SESSION[name]");
	$qry="select name,email,mobileno,date from userprof where userid=$_SESSION[userid]";
	$rs=mysqli_query($con,$qry);
	$row=mysqli_fetch_row($rs);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="profpagestyles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./includes/headerstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./includes/footerstyle.css">
</head>
<body>
<?php
    include_once("./includes/header.php")
    ?>
    <div><br><br><br></div>
    <div class="container mt-5">
        
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/150" class="rounded-circle" alt="Profile Image">
                
            </div>
            <div class="col-md-9">
                <h3>Your Profile</h3>
                <div class="panel panel-default">
					<div class="panel-heading">Profile</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> 
 </p>
						<div class="col-md-12">
							<form role="form" method="post" action="">
								<div class="form-group">
									<label>Full Name</label>
									<input class="form-control" type="text" value="<?php if(isset($row)){echo $row[0];} ?>" name="fullname" required="true">
								</div>
								<div class="form-group">
									<label>Email</label>
<input type="email" class="form-control" name="email" value="<?php if(isset($row)){echo $row[1];} ?>" required="true" readonly="true">
								</div>
								
								<div class="form-group">
									<label>Mobile Number</label>
									<input class="form-control" type="text" value="<?php if(isset($row)){echo $row[2];} ?>" required="true" name="mobile" maxlength="10">
								</div>
								<div class="form-group">
									<label>Registration Date</label>
									<input class="form-control" name="regdate" type="text" value="<?php if(isset($row)){echo $row[3];} ?>" readonly="true">
								</div>
								
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="update">Update</button>
                                    <a href="./logout.php" class="btn btn-primary" name="logout">Logout</a>
								</div>
								
								
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
    
                <a href="#" class="btn btn-link">See your posts, reviews and other public content</a>
            </div>
        </div>
    </div>
    <?php
    include_once("./includes/footer.php");
    ?>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

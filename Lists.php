<?php
require_once("./includes/dbconnection.php");
session_start();
if(!isset($_SESSION["userid"]))
{
	header("location:logout.php");
}
else
{
	
	$qry="select itemname,itemprice from itemlist where userid=$_SESSION[userid]";
	$rs=mysqli_query($con,$qry);
    $qryw="select itemname,itemprice from wishlist where userid=$_SESSION[userid]";
	$rsw=mysqli_query($con,$qryw);
    $qryc="select itemname,itemprice from cartlist where userid=$_SESSION[userid]";
	$rsc=mysqli_query($con,$qryc);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lists</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./includes/headerstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./includes/footerstyle.css">
</head>
<body>
	<?php include_once('./includes/header.php');?>	

	<div><br><br><br></div>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Order Placed</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center">  </p>
						<div class="col-md-12">
							
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Item Name</th>
                  <th>Item Price</th>
                </tr>
              </thead>
			    
              <tbody>
				<?php 
				$i=1;
                while($row=mysqli_fetch_row($rs))
				{
					echo"<tr><td>$i</td><td>$row[0]</td><td>$row[1]</td></tr>";
					$i++;
				}
                ?>
              </tbody>
            </table>
          </div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div>
        <div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Wishlist</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center">  </p>
						<div class="col-md-12">
							
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Item Name</th>
                  <th>Item Price</th>
                </tr>
              </thead>
			    
              <tbody>
				<?php 
				$i=1;
                while($roww=mysqli_fetch_row($rsw))
				{
					echo"<tr><td>$i</td><td>$roww[0]</td><td>$roww[1]</td></tr>";
					$i++;
				}
			
                ?>
              </tbody>
            </table>
          </div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div>
        <div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Cart</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center">  </p>
						<div class="col-md-12">
							
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Item Name</th>
                  <th>Item Price</th>
                </tr>
              </thead>
			    
              <tbody>
				<?php 
				$i=1;
                while($rowc=mysqli_fetch_row($rsc))
				{
					echo"<tr><td>$i</td><td>$rowc[0]</td><td>$rowc[1]</td></tr>";
					$i++;
				}
			
                ?>
              </tbody>
            </table>
          </div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.main-->	
	<?php include_once('./includes/footer.php');?>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
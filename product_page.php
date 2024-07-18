<?php
require_once("./includes/dbconnection.php");
session_start();
if(!isset($_SESSION["userid"]))
{
	header("location:LoginPG.php");
}
else
{
	if(isset($_POST["wishitem"]))
	{	
        $conn=mysqli_connect("localhost","root","","amazon") or die("connection error");
        $uid=$_SESSION["userid"];

		$item=$_POST["itemname"];
		$price=$_POST["itemprice"];		
		echo("welcome $_SESSION[name]");

		$qry="insert into wishlist(itemname,itemprice,userid) values('$item','$price','$uid')";
		mysqli_query($con,$qry);
	}
    else if(isset($_POST["cartitem"]))
	{	$conn=mysqli_connect("localhost","root","","amazon") or die("connection error");
        $uid=$_SESSION["userid"];

		$item=$_POST["itemname"];
		$price=$_POST["itemprice"];		
		echo("welcome $_SESSION[name]");

		$qry="insert into cartlist(itemname,itemprice,userid) values('$item','$price','$uid')";
		mysqli_query($con,$qry);
	}
}
?>
<?php
// require_once("./includes/dbconnection.php");
// session_start();
// if(!isset($_SESSION["userid"]))
// {
// 	header("location:index.php");
// }
// else
// {
// 	if(isset($_POST['addexpense']))
// 	{	
// 		$uid=$_SESSION["userid"];
// 		$ed=$_POST["expensedate"];
// 		$item=$_POST["itemname"];
// 		$price=$_POST["price"];		
// 		echo("welcome $_SESSION[name]");

// 		$qry="insert into expense(userid,expensedate,itemname,price) values($uid,'$ed','$item',$price)";
// 		mysqli_query($con,$qry);
// 	}
// }
?>
<?php
// if(isset($_POST["register"]))
// {
//     $conn=mysqli_connect("localhost","root","","amazon") or die("connection error");
//     $name=$_POST["name"];
//     $email=$_POST["email"];
//     $password=$_POST["password"];
//     $mobno=$_POST["mobile"];
//     $insertqry="insert into userprof(name,email,mobileno,password) values('$name','$email','$mobno','$password')";
//     mysqli_query($conn,$insertqry);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Product Page</title>
    <link rel="stylesheet" href="prodpagestyle.css">
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
    <div class="container">
        <div class="left-column">
            <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" width="500px" height="300px" alt="Product Image" class="main-image">
            <div class="small-images">
                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="Product Image" width="100px" height="50px">
                
                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="Product Image" width="100px" height="50px">
                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/IMG20/Home/2024/Gateway/BTFGW/PCQC/New/1x/final/186x116_Home_decor_1._SY116_CB555624324_.jpg" alt="Product Image" width="100px" height="50px">
            </div>
        </div>
        <div class="right-column">
        <form method="post" role="form" action="">
            <h1>LOREM ipsum dolor sit</h1>
            <div class="form-group invisible">
                <input type="text" class="form-control"  name="itemname" value="LOREM ipsum dolor sit" readonly>
            </div>
            <p class="rating">4.2 ★★★★☆ | 9,294 ratings | 1,591 reviews</p>
            <p class="amazon-choice">Amazon's Choice</p>
            <p class="price">₹939.00</p>
            <div class="form-group invisible">
                <input type="text" class="form-control"  name="itemprice" value="₹939.00" readonly>
            </div>
            <p class="deal">Limited time deal</p>
            <p class="discount">-37% ₹1,499</p>
            <p class="tax">Inclusive of all taxes</p>
            <p class="emi">EMI starts at ₹326 per month. EMI options</p>
            <div class="coupon">
                <input type="checkbox" id="coupon">
                <label for="coupon">Apply ₹50 coupon</label>
            </div>
            <div class="offers">
                <p>Save Extra with 2 offers</p>
                <p>Bank Offer (45): Flat INR 1250 Instant Discount on HDFC Bank 6,9 month Credit Card EMI Trxn. Minimum purchase v... <a href="#">See All</a></p>
                <p>Partner Offers: Get GST invoice and save up to 28% on business purchases. <a href="#">Sign up for free</a></p>
            </div>
            <div class="availability">
                <p>In stock</p>
                <p>Ships from Amazon</p>
                <p>Sold by Lorem Ipsum</p>
            </div>
            <div class="quantity">
                <label for="quantity">Quantity:</label>
                <select id="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="buttons">
                <button type="submit" name="cartitem" class="add-to-cart">Add to Cart</button>
            </div>
            <div class="additional-info">
                <p>Secure transaction</p>
                <input type="checkbox" id="gift-options">
                <label for="gift-options">Add gift options</label>
                <button type="submit" name="wishitem" class="wish-list">Add to Wish List</button>
            </div>
        </form>
        <a href="buy_page_1.php"><button class="buy-now">Buy Now</button></a>
        </div>

    </div>
    <?php
    include_once("./includes/footer.php");
    ?>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="frontjs.js"></script>
</body>
</html>

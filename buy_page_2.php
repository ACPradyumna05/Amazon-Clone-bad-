<?php
require_once("./includes/dbconnection.php");
session_start();
if(!isset($_SESSION["userid"]))
{
	header("location:LoginPG.php");
}
else
{
	if(isset($_POST['additem']))
	{	
        $uid=$_SESSION["userid"];

		$item=$_POST["itemname"];
		$price=$_POST["itemprice"];		
		echo("welcome $_SESSION[name]");

		$qry="insert into itemlist(itemname,itemprice,userid) values('$item','$price','$uid')";
		mysqli_query($con,$qry);
        header("location:ordersuc.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Order Review</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f6f6f6;
        }
        .order-review {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .place-order-btn {
            background-color: #ffd814;
            color: #111;
            font-weight: bold;
        }
        .place-order-btn:hover {
            background-color: #f7ca00;
        }
        .alert-warning {
            background-color: #fff3cd;
            border-color: #ffeeba;
            color: #856404;
        }
        .footer {
            background-color: #232f3e;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }
        .invisible{

            visibility: hidden;

        }

    </style>
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
    <form method="post" action="" role="form">
        <div class="order-review">
        
        <h4>Review your order</h4>
        <p>By placing your order, you agree to Amazon's <a href="#">privacy notice</a> and <a href="#">conditions of use</a>.</p>
        
        <div class="row">
            <div class="col-md-6">
                <h5>Shipping address</h5>
                Lorem ipsum, <br>
                dolor sit amet consectetur adipisicing elit.<br>
                Voluptate error autem minima excepturi,<br>
                dolorem eos. <br>
                Mollitia eveniet consectetur est similique?<br>
                <a href="#">Add delivery instructions</a></p>
                <p><a href="#">Also Available for Pickup</a><br>
                <a href="#">See nearby pickup locations</a></p>
            </div>
            <div class="col-md-3">
                <h5>Payment method</h5>
                <p>Pay on delivery (Cash/Card)</p>
            </div>
            <div class="col-md-3">
                <h5>Gift cards, Voucher & Promotional codes</h5>
                <input type="text" class="form-control mb-2" placeholder="Enter Code">
                <button class="btn btn-secondary btn-block">Apply</button>
                <div class="form-group invisible">
                <input type="text" class="form-control"  name="itemname" value="LOREM ipsum dolor sit" readonly>
            </div>
            <div class="form-group invisible">
                <input type="text" class="form-control"  name="itemprice" value="₹939.00" readonly>
            </div>
            </div>
        </div>

        <h5 class="mt-4">Arriving 19 Jul 2024</h5>
        <div class="media">
            <img src="https://via.placeholder.com/64" class="mr-3" alt="Product Image">
            <div class="media-body">
                <h6 class="mt-0">Lorem ipsum dolor sit.</h6>
                <p>Quantity: 1<br>
                <a href="#">Change</a></p>
                <p><strong>₹598.00</strong> <small class="text-muted">₹2,799.00</small> <span class="badge badge-success">79% off</span><br>
                You Save: ₹2,201.00</p>
                <p>Sold by: Lorem, ipsum dolor.</p>
                <button class="btn btn-secondary btn-sm">Add gift options</button>
            </div>
        </div>

        <h5 class="mt-4">Choose a delivery speed:</h5>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="deliverySpeed" id="freeDelivery" checked>
            <label class="form-check-label" for="freeDelivery">
                Wednesday — FREE Delivery at ₹40 per unit. FREE for orders above ₹499
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="deliverySpeed" id="oneDayDelivery">
            <label class="form-check-label" for="oneDayDelivery">
                Tomorrow by 10pm — ₹99.00 One-Day Delivery at Rs. 99 per item. FREE with Prime
            </label>
        </div>
        <p class="mt-3"><a href="#">What if I am not in?</a></p>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Order Summary</h5>
                <p class="card-text">
                    Items: ₹598.00<br>
                    Delivery: ₹40.00<br>
                    Total: ₹638.00<br>
                    Promotion Applied: -₹40.00<br>
                    <strong>Order Total: ₹598.00</strong><br>
                    <small>Your Savings: ₹2,241.00 (79%)<br>
                    FREE Delivery<br>
                    Item discount</small>
                </p>
                <button type="submit" name="additem" class="btn btn-block btn-warning">Place Your Order</button>
    
            </div>
        </div>

        <div class="mt-4">
            <p>Need help? Check our <a href="#">help pages</a> or <a href="#">contact us 24x7</a></p>
            <p>When your order is placed, we'll send you an e-mail message acknowledging receipt of your order. If you choose to pay using an electronic payment method (credit card, debit card or net banking), you will be directed to your bank's website to complete your payment. Your contract to purchase an item will not be complete until we receive your electronic payment and dispatch your item. If you choose to pay using Pay on Delivery (POD), you can pay using cash/card/net banking when you receive your item.</p>
            <p>See <a href="#">Amazon.in's Return Policy</a>.</p>
            <p>Go to the <a href="#">Amazon.in homepage</a> without completing your order.</p>
        </div>
    </form>
    </div>
</div>

<div class="footer">
    <a href="#">Conditions of Use</a> | <a href="#">Privacy Notice</a> | <a href="#">Interest-Based Ads</a>
    <p>&copy; 1996-2024, Amazon.com, Inc. or its affiliates</p>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Payment Method</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f6f6f6;
        }
        .payment-method {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .continue-btn {
            background-color: #ffd814;
            color: #111;
            font-weight: bold;
        }
        .continue-btn:hover {
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
    <div class="payment-method">
        <div class="alert alert-warning" role="alert">
            Amazon Pay Balance is insufficient for this payment. Please add money using UPI/Credit/Debit card. <a href="#">Know More.</a>
        </div>
        <a href="buy_page_2.php"><button class="btn btn-block continue-btn mb-3">Continue</button></a>

        <div class="form-group">
            <label>Recommended</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="cod" checked>
                <label class="form-check-label" for="cod">
                    Cash on Delivery/Pay on Delivery
                </label>
            </div>
        </div>

        <div class="form-group">
            <label>UPI</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="upiApps">
                <label class="form-check-label" for="upiApps">
                    Other UPI Apps
                </label>
            </div>
        </div>

        <div class="form-group">
            <label>Credit & Debit Cards</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="creditDebit">
                <label class="form-check-label" for="creditDebit">
                    Credit or debit card
                </label>
            </div>
        </div>

        <div class="form-group">
            <label>More Ways to Pay</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="emi" disabled>
                <label class="form-check-label" for="emi">
                    EMI <a href="#">Why?</a>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentMethod" id="netBanking">
                <label class="form-check-label" for="netBanking">
                    Net Banking
                </label>
            </div>
        </div>

        <div class="form-group">
            <a href="buy_page_2.php"><button class="btn btn-block continue-btn">Continue</button></a>
        </div>
    </div>
</div>

<div class="footer">
    <a href="#">Conditions of Use</a> | <a href="#">Privacy Notice</a> | <a href="#">Interest-Based Ads</a>
    <p>&copy; 1996-2024, Amazon.com, Inc. or its affiliates</p>
</div>
<?php
include_once("./includes/footer.php");
    ?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');

$check = $_SESSION['email'];
$address = $_SESSION['address'];
$totalprice = $_POST['totalprice'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cloud Lace Confirm Purchase</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <center>
    <h1>Cloud Lace Shoe Store!</h1>
    <h2>Order Results</h2>
<?php

	echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

	echo "<p>Your order is as follows: </p>";
	
	echo "Subtotal: $".number_format($totalprice,2)."<br />";

	$taxrate = 0.10;  // local sales tax is 10%
	$totalamount = $totalprice * (1 + $taxrate);
	echo "Total including tax: $".number_format($totalamount,2)."<br />";

	echo "<p>Thank you for using our store, ".$_SESSION['email']." !</p>";

?>
    <a href="dashboard.php"><button>Return to main page.</button></a>
    </center>
</body>
</html>

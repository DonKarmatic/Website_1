<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'darvild1_admin1';
$DATABASE_PASS = '493xlr8xX@X';
$DATABASE_NAME = 'darvild1_cloudlace';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['email'], $_POST['password'], $_POST['address'],$_POST['age'],$_POST['payMethod'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['address']) || empty($_POST['age'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}


// We need to check if the account with that username exists.
if ($stmt = $con->prepare("SELECT id, password FROM member WHERE email = ?")) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Email already exists, please choose another!';
	} else {
// Username doesnt exists, insert new account
if ($stmt = $con->prepare("INSERT INTO member (`email`, `password`, `address`, `age`, `payMethod`) VALUES (?, ?, ?, ?, ?)")) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = $_POST['password'];
	$stmt->bind_param('sssss', $_POST['email'], $_POST['password'], $_POST['address'], $_POST['age'], $_POST['payMethod']);
	$stmt->execute();
	header('Location: login.php');

} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>

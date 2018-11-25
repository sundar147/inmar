<?php 
session_start();
	$conn = new mysqli("localhost","root","","inmar");

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}

	$fname = $_POST["Firstname"];
	$lname = $_POST["lastname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["Address"];
	$pan = $_POST["PAN"];
	$password = $_POST["password"];
	$storename = $_POST["storename"];
	$wallet=3500;

	$sql = "INSERT INTO retailer(firstname,lastname,email,phonenumber,address,pancardnumber,password,storename,wallet) VALUES ('$fname','$lname','$email',$phone,'$address','$pan','$password','$storename','$wallet')";

	if ($conn->query($sql) === TRUE)
	{
	    $_SESSION['email'] = $email;
	    header('location:jsontojquery.php');
	} 
	else
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	} 
?>
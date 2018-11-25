<?php 
session_start();

	$conn = new mysqli("localhost","root","","inmar");

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}

	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$pan = $_POST["PAN"];
	$password = $_POST["password"];
	$wallet=3500;


	$sql = "INSERT INTO shopper VALUES ('$fname','$lname','$email',$phone,'$address','$pan','$password','$wallet')";

	if ($conn->query($sql) === TRUE)
	{
		$_SESSION['buyeremail']=$email;
		header('location:buyerdashboard.php');
	} 
	else
	{
	    echo "Error: " . $sql . "<br>" . $conn->error;
	} 
?>
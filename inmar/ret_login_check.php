<?php 
session_start();
	$conn = new mysqli("localhost","root","","inmar");

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}

	
	$email = $_POST["username"];
	
	$password = $_POST["password"];

	$sql = "SELECT * from retailer WHERE email='$email' AND password='$password'";
	$result= $conn->query($sql);
	if($result->num_rows>0){
		$_SESSION['email']=$email;
		header('location:jsontojquery.php');
	}
	else{
		echo "wrong credentials";
	}

	$conn->close(); 
?>
<?php 
session_start();
	$conn = new mysqli("localhost","root","","inmar");
	$email=$_SESSION['email'];

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}
	

	$storelocation=$_POST["storelocation"];

	$description=$_POST["description"];

	$query = "UPDATE retailer SET storelocation='$storelocation',description='$description' where email='$email'";
	$result= $conn->query($query);
	if($result>0){
		//$_SESSION['email']=$email;
		header('location:jsontojquery.php');
	}
	else{
		echo "Updation Failed";
	}

	$conn->close(); 
?>
<?php
	session_start();
	$conn = new mysqli("localhost","root","","inmar");

	if($conn->connect_error)
	{
		die("Connection FAILED:". $conn->connect_error);
	}

	$email = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "SELECT * FROM shopper WHERE email='$email' AND password = '$pass'";
	$res = $conn->query($sql);
	if($res->num_rows > 0)
	{
		$_SESSION['buyeremail']=$email;
		header('location:buyerdashboard.php');
	}
	else
	{
		echo "FAILED";
	}
	$conn -> close();
?>
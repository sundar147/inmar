<?php
	$conn = new mysqli("localhost","root","","inmar");

	$email = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "SELECT * FROM retailer WHERE email = '$email' and password = '$pass'";
	$res = $conn->query($sql);
	if($res->num_rows > 0)
	{
		while($row = $res->fetch_assoc() )
		{
			echo "NAME : ".$row["firstname"]." ".$row["lastname"];
			
		}
	}
	else
	{
		echo "FAILED";
	}
	$conn -> close();
?>
<?php
session_start();
if (isset($_SESSION['buyeremail'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	  <style>
			h1 {
			    text-shadow: 2px 2px 4px #000000;
			}
	</style>

</head>
<body style="background-image: url('img/input-bg-07.jpeg')">

	<div class="container-fluid">
		<div class="row">
		    <div class="col-md-12 title"><br><br>
		    	<h1 style="text-align: center; font-size: 70px;">FRUIT BUCKET</h1><br><br><br><br><br>
		    </div>	
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
		    <div class="col-lg-6 " style="text-align: center;">
		      <h1 style="font-size: 40px">RETAILER</h1><br><br>
		      <button type="button" id="b1" style="background-color: #e7e7e7; color: black; font-size: 24px;"><a href="retailer_register.php">SIGNUP</a></button><br><br>
		    </div>
		    <div class="col-lg-6 " style="text-align: center;">
		      <h1 style="font-size: 40px">BUYER</h1><br><br>
		      <button type="button" id="b3" style="background-color: #e7e7e7; color: black; font-size: 24px;"><a href="buyer_register.php">SIGNUP</a></button><br><br>
		    </div>
		  </div>
	</div>

</body>
</html>
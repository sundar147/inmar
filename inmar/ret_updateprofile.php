<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		    <meta charset="UTF-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		    <title></title>
			<!--
		    Template 2105 Input
			http://www.tooplate.com/view/2105-input
			-->
		    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
		    <link rel="stylesheet" href="css/bootstrap.min.css">
		    <link rel="stylesheet" href="css/materialize.min.css">
		    <link rel="stylesheet" href="css/tooplate.css">
	</head>

		<body id="register">
		    <div class="container">
		        <div class="row">
		            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
		                <header class="mb-5">
		                    <h3 class="mt-0 white-text">Update Profile</h3>
		                </header>
		            </div>
		            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
		                <form action="ret_updateprofile_server.php" method="post" class="tm-signup-form">
		                    
		                     <div class="input-field">
		                        <input placeholder="storelocation" id="storelocation" name="storelocation" type="text" class="validate">
		                    </div>
			            	<div class="row">
	                            <div class="col-xl-12">
	                                 <p class="mb-4" style="color: white"> Description </p>
	                                <textarea class="p-3" name="description" id="message" cols="30" rows="3" placeholder=" Message......."></textarea>
	                            </div>
	                   		 </div>
		                    <div class="text-right mt-4">
		                        <button type="update" class="waves-effect btn-large btn-large-white px-4 tm-border-radius-0">Update</button>
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>

	    <script src="js/jquery-3.2.1.slim.min.js"></script>
	    <script src="js/materialize.min.js"></script>
	    <script>
	        $(document).ready(function () {
	            $('select').formSelect();
	        });
    </script>
</body>

</html>
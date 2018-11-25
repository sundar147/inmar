<?php
session_start();
if (isset($_SESSION['email'])) {
    header('location:jsontojquery.php');
}
if (isset($_GET['logout'])) {
    unset($_SESSION['email']);
    session_destroy();
    header('location:index.php');
}
if (isset($_SESSION['buyeremail'])) {
    header('location:buyerdashboard.php');
}
if (isset($_GET['logout'])) {
    unset($_SESSION['buyeremail']);
    session_destroy();
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input HTML Form Pack by Tooplate</title>
    <!--

    Template 2105 Input

	http://www.tooplate.com/view/2105-input

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">  
</head>

<body id="home">
    <div class="container tm-home-mt tm-home-container">
        <div class="row">
            <div class="col-12">
                <div class="tm-home-left">
                    <h1 class="tm-site-title">FRUIT BUCKET</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="tm-home-left mt-3 font-weight-light">
                    <p class="tm-mb-35">This is an Online fruit market</p>
                    <p class="tm-mb-35">Please share it to your friends.</p>
                    <p>Thank you!</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <ul class="list-group tm-home-list tm-bg-black font-weight-light">
                    <li class="d-flex justify-content-between align-items-center">
                        <a href="index.php" class="tm-white-text">01.Home</a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                        <a href="signup1.php" class="tm-white-text">02. Sign Up</a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                        <a href="login1.php" class="tm-white-text">03. Login</a>
                    </li>
                     <li class="d-flex justify-content-between align-items-center">
                        <a href="aboutus.html" class="tm-white-text">04. About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="row tm-mt-big mb-3">
        <div class="col-xl-12 text-center font-weight-light">
            <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
                Copyright &copy; 2018 Company Name - Design:
                <a rel="nofollow" href="http://tooplate.com" class="tm-footer-link">Tooplate</a>
            </p>
        </div>
    </footer>
</body>

</html>
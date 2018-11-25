<?php
session_start();
if (!isset($_SESSION['buyeremail'])) {
	header('location:index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
		  	<style>
		body {
		    font-family: "Lato", sans-serif;
		}

		.sidenav {
		    height: 100%;
		    width: 0;
		    position: fixed;
		    z-index: 1;
		    top: 0;
		    left: 0;
		    background-color: #111;
		    overflow-x: hidden;
		    transition: 0.5s;
		    padding-top: 60px;
		}

		.sidenav a {
		    padding: 8px 8px 8px 32px;
		    text-decoration: none;
		    font-size: 25px;
		    color: #818181;
		    display: block;
		    transition: 0.3s;
		}

		.sidenav a:hover {
		    color: #f1f1f1;
		}

		.sidenav .closebtn {
		    position: absolute;
		    top: 0;
		    right: 25px;
		    font-size: 36px;
		    margin-left: 50px;
		}

		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
		</style>
  	<style type="text/css">
  		.result_container>.row>div:nth-child(2)>.result>ul>li
  		{
  			background-image:url('img/input-bg-12.jpeg');
  			margin-top: 2%;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>span
  		{
  			margin-left: 5%;
  			font-size: 20px;
  		}
  		.result_container>.row>div:nth-child(2)>.result>ul>li>button
  		{
  			float: right;
  			background-color: #5c85d6;
  		}
  		td{
  			color: black;
  			font-size: 20px;
  		}
  	</style>
  	<script type="text/javascript">
  		var buyer_email=$("#emailid").text().trim();
		var sellers_from_server="";
		var unorderedlist="";
		var fruittable="";
		var thead="";
		var colrow="";
		var sellers_fruits_from_server="";
  		$(document).ready(function(){
  			buyer_email=$("#emailid").text().trim();
			sellersInformation();
			$.post("get_wallet_money_buy.php",{"email":buyer_email},
         	function(data){
              $("#walletid").text(data);
         	}
         	);
		    $(document).on("click","#shop",function(){
		    	console.log($(this).attr("name"));
		    	 $("ul").remove();
		    	 $.post("get_fruit_information.php",
				    {"email":sellers_from_server[$(this).attr("name")].semail},
				    function(data,status){
				    	console.log(data);
				    	sellers_fruits_from_server=JSON.parse(data);
				    	drawTable(sellers_fruits_from_server);
				    }
		    	);

		    });
  		});
  		function sellersInformation()
  		{
  			$("table").remove();

  			$.post("get_sellers_information.php",
				    {"email":""},
				    function(data,status){
				    	console.log(data);
				    	sellers_from_server=JSON.parse(data);
				    	drawList(sellers_from_server);
				    }
		    );
  		}
  		function drawList(sellers)
  		{
  			unorderedlist = $("<ul class='list-group'/>");
  			$("ul").remove();
  			$("#result").append(unorderedlist);
  			for(var i=0;i<sellers.length;i++)
  			{
  				drawListItem(sellers[i],i);
  			}
  		}
  		function drawListItem(seller,index)
  		{
  			unorderedlist.append($("<li class='list-group-item'><h3>Seller Name</h3><span>"+seller.sname+"</span><br><h3>Seller Email</h3><span>"+seller.semail+"</span><br><h3>Shop Name</h3><span>"+seller.shopname+"</span><button class='btn btn-default' type='button' id='shop' name='"+index+"'>shop</button><br><br></li>"));
  		}
  		function drawTable(fruits){
			//console.log(fruits.length);
			fruittable= $("<table class='table table-striped'/>");
			thead=$("<thead/>");
			colrow=$("<tr>");
			thead.append(colrow);
			colrow.append("<td>FruitName</td>");
			colrow.append("<td>Qunatity</td>");
			colrow.append("<td>Price</td>");
			fruittable.append(thead);
			$("#result").append(fruittable);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],i);
    		}
		}
		function drawRow(fruit,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				fruittable.append(tbody);
			    tbody.append(row); 
			    //row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='delete.png' width='10' height='10'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    //row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update.png' width='20' height='20'></td>"));
		}       
  	</script>
</head>
<body style="background-image: url('img/input-bg-10.jpeg')">

                <h4 style="color: black;font-size: 50px;">Wallet</h4><h4 id="walletid" style="color: black; font-size: 20px"></h4>
                
            
	<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="#">About</a>
		  <a href="#">Update Profile</a>
		  <a href="index.php?logout='1'" style="font-size: 20px">LOGOUT</a>
	</div>
	<span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>

	<script>
		function openNav() {
		    document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		}
	</script>

	<h1 id="emailid" style="text-align: center;color: white"><?php  echo $_SESSION['buyeremail']; ?></h1><br>
	<div class="container result_container">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6">
				<button type="button" class="btn btn-default" onclick="sellersInformation()">DashBoard Home</button>
				<div class="result" id="result">
						
				</div>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
</body>
</html>
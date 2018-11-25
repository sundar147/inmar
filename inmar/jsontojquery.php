<?php
session_start();
if (!isset($_SESSION['email'])) {
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
		.fruit_information>.row>div>table img
		{
			cursor: -webkit-grab; cursor: grab;
		}
		.fruit_information
		{
			//background-color:#e8e8e8;
		}
		.add_fruit_information
		{
			margin-top: 2%;
		}
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		var email;
		$(document).ready(function(){			
			email=$("#emailid").text().trim();
			var fruits_from_server="";
			$.post("get_wallet_money_ret.php",{"email":email},
         	function(data){
              $("#walletid").text(data);
         	}
         	);
			$.post("get_fruit_information.php",
				    {"email":email},
				    function(data,status){
				    	//console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	//alert(fruits_from_server[2].fname);
				    	drawTable(fruits_from_server,email);
				    }
		    );
									
			$(document).on("click","#delete",function(){
					var temp=$(this).attr("name");
					console.log(temp.split(":")[0]+" "+temp.split(":")[1]);
					deleteRow(temp.split(":")[0],temp.split(":")[1]);
			});
			$(document).on("click","#update",function(){
					var temp=$(this).attr("name");
					//console.log(temp);
			});
			$("#btn_add").click(function(){
				$("tbody").remove();
				$.post("add_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#fruit_name").val(),
				      "quantity":$("#quantity").val(),
				      "price":$("#price").val()
				    },
				    function(data,status){
				    	console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }
		    	);
			});
			$(document).on("click","#update",function(){
				var index=$(this).attr("name");
				console.log(index);
				console.log(fruits_from_server[index].fname);
				$("#update_fruit").text(fruits_from_server[index].fname);
				$("#update_quantity").val(fruits_from_server[index].quantity);
				$("#update_price").val(fruits_from_server[index].price);

			});
			$("#update_btn").click(function(){
				 $("tbody").remove();
				 $.post("update_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#update_fruit").text(),
				      "quantity":$("#update_quantity").val(),
				      "price":$("#update_price").val()
				    },
				    function(data,status){
				    	console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }
		    	);
			});
		});
		function drawTable(fruits,email){
			//console.log(fruits.length);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],email,i);
    		}
		}
		function drawRow(fruit,email,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				$("#tableone").append(tbody);
			    tbody.append(row); 
			    row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='delete.png' width='10' height='10'></td>"));
			    row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update.png' width='20' height='20'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			   
		}       
		function deleteRow(email,fruit_name)
		{
			
			$("tbody").remove();
			$.post("delete_fruit_information.php",
				    {"email":email,"fruit_name":fruit_name},
				    function(data,status){				    	
				    	//console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }
				  );
		}
	</script>
</head>
<body style="background-image: url('img/input-bg-09.jpg')">
	<nav class="navbar navbar-inverse"> 
                <div class="navbar-header">
                    
                </div>
                <ul class="nav navbar-nav">
                    
                </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><h4 style="color: white">Wallet</h4><h4 id="walletid" style="color: white"></h4></li>
                <li><a href="#"><span class="glyphicon-glyphicon-log-in"></span></a></li>
            </ul>
        </nav>
	<!-- <nav> <h4>Wallet</h4><h4 id="walletid"></h4></nav> -->
	<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="aboutus.html">About</a>
		  <a href="ret_updateprofile.php">Update Profile</a>
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

	<h1 id="emailid" style="color: black; text-align: center;"><?php echo $_SESSION['email']; ?></h1><br>

<!--start Modal add information-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Fruit Info</h4>
        </div>
        <div class="modal-body">
           <form >
					<div class="form-group">
  						<label> FruitName:</label>
  						<input type="text" class="form-control" id="fruit_name">
					</div>
					<div class="form-group">
  						<label>Quantity:</label>
  						<input type="text" class="form-control" id="quantity">
					</div>
					<div class="form-group">
  						<label>Price:</label>
  						<input type="text" class="form-control" id="price">
					</div>
					<button type="button" id="btn_add" class="btn btn-default" data-dismiss="modal">Add</button>
			</form>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal add information-->
<!--start Modal update-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="update_fruit"></h4>
        </div>
        <div class="modal-body">
           <form>
           		<div class="form-group">
           			<label>Qunatity</label>
           			<input type="number" id="update_quantity" class="form-control">           			
           		</div>
           		<div class="form-group">
           			<label>Price</label>
           			<input type="number" id="update_price" class="form-control">           			
           		</div>
           		<button id="update_btn" type="button" class="btn btn-default" data-dismiss="modal">Update</button>
           </form>           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal update-->
  
	<div class="container fruit_information" style="">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Add</button>

				<table class="table table-striped" id="tableone">
					<thead>
						<tr>
							<th>Delete</th>
							<th>Update</th>
							<th>Fruit</th>
							<th>Quantity</th>
							<th>Price/Unit</th>
						</tr>
					</thead>					
				</table>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
	<!-- <div class="container add_fruit_information">
		<div class="row">
			<div class="col-xs-12 col-sm-4"></div>		
			<div class="col-xs-12 col-sm-4">
				
			</div>		
			<div class="col-xs-12 col-sm-4"></div>		
		</div>
	</div> -->
</body>
</html>
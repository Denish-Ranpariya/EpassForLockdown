<?php
session_start();
if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
    header("Location: adminlogin.php");
    die();
}
include 'connection.php';

$select_query="select * from contactus";

$result=mysqli_query($con,$select_query);





?>





<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand text-warning">Epass for Lockdown</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav text-center ml-auto">
				<li class="nav-item">
					<a href="messages.php" class="nav-link">Messages</a>
				</li>
				<li class="nav-item">
					<a href="adminlogout.php" class="nav-link">Logout</a>
				</li>
			</ul>
			</div>
		</div>
	</nav><br><br>
	<!-- <h1 align="center">DATA DISPLAY FROM DATABASE</h1><br><br><br> -->
	

	<div class="container">
		<h1 class="text-center text-dark">Messages</h1><br><br>
	

	<center>
	<table class="table table-bordered table-hover table-responsive-sm table-responsive-md ">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Message</td>
		</tr>
		
			<?php
				while($res=mysqli_fetch_array($result)){
			?>
			<tr>
					<td><?php echo $res['id']?></td>
					<td><?php echo $res['name']?></td>
					<td><?php echo $res['email']?></td>
					<td><?php echo $res['message']?></td>
					
			</tr>
			<?php
				}
			?>
			
	</table>
	</center>
	</div>
</body>
</html>
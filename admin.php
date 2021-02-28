<?php
session_start();
if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
    header("Location: adminlogin.php");
    die();
}
include 'connection.php';

$select_query="select * from personal where status='pending'";

$result=mysqli_query($con,$select_query);





?>





<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		td{
			text-align: center;
			font-size:0.5rem;
		}
	</style>
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
	

	<div class="container-fluid">
		<h1 class="text-center text-dark">Pending Requests</h1><br><br>
	


	<table class="table table-bordered table-hover table-responsive-sm table-responsive-md table-responsive  ">
		<tr>
			<td class="p-0">ID</td>
			<td>Name</td>
			<td>Gender</td>
			<td>Number</td>
			<td>Whatsapp Number</td>
			<td>Email</td>
			<td>Residential Address</td>
			<td>Address of the place to be engaged</td>
			<td>Service</td>
			<td>From Date</td>
			<td>To date</td>
			<td>From Time</td>
			<td>To Time</td>
			<td>District</td>
			<td>Epass id</td>
			<td>Passport sized photo</td>
			<td>Id card</td>
			<td>Other photo</td>
			<td colspan="2">operation</td>
		</tr>
		
			<?php
				while($res=mysqli_fetch_array($result)){
			?>
			<tr>
					<td><?php echo $res['id']?></td>
					<td><?php echo $res['name']?></td>
					<td><?php echo $res['gender']?></td>
					<td><?php echo $res['number']?></td>
					<td><?php echo $res['wnumber']?></td>
					<td><?php echo $res['email']?></td>
					<td><?php echo $res['raddress']?></td>
					<td><?php echo $res['offaddress']?></td>
					<td><?php echo $res['service']?></td>
					<td><?php echo $res['fdate']?></td>
					<td><?php echo $res['tdate']?></td>
					<td><?php echo $res['ftime']?></td>
					<td><?php echo $res['ttime']?></td>
					<td><?php echo $res['district']?></td>
					<td><?php echo $res['epassid']?></td>
					<td><a href="<?php echo $res['passportphoto']?>" >photo</a></td>
					<td><a href="<?php echo $res['idphoto']?>">id</a></td>
					<td><a href="<?php echo $res['otherphoto'] ?>">other</a></td>
					<td><button class="btn btn-success"><a href="accept.php?id=<?php echo $res['id']  ?>" class="text-light">Accept</a></button></td>
					<td><button class="btn btn-danger"><a href="reject.php?id=<?php echo $res['id']  ?>" class="text-light">reject</a></button></td>
					
			</tr>
			<?php
				}
			?>
			
		</tr>
	</table>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Aboutus</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.background{
			background-color: #cccccc;
		}
		.body{
			margin:0px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
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
					<a href="registration.php" class="nav-link" target="_blank">Home</a>
				</li>
				<li class="nav-item">
					<!-- <a href="#" class="nav-link">Contact Us</a> -->
					<a href="#" class="nav-link" data-target="#mymodal" data-toggle="modal">Contact Us</a>
				</li>
				<li class="nav-item">
					<!-- <a href="#" class="nav-link">Contact Us</a> -->
					<a href="about.php" class="nav-link">About Us</a>
				</li>
			</ul>
			</div>
		</div>
	</nav><br><br>

	<div class="modal fade" id="mymodal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="text-dark">Contact Us</h3>
						<button class="close" data-dismiss="modal">&times;</button>
						
					</div>
					<div class="modal-body">
							<form  method="POST" enctype="multipart/0-data" autocomplete="off">
								<div class="form-group">
									<label for="name"><i class="fas fa-user"></i> &nbsp;Name:</label>
									<input type="text" name="cname" id="name" class="form-control" pattern="[a-zA-Z\s]+" title="Enter alphabets only" required>
								</div>
								<div class="form-group">
									<label for="email"><i class="fas fa-envelope"></i> Email:</label>
									<input type="email" name="cemail" id="email" class="form-control" required>  
								</div>
								<div class="form-group">
      								<label for="message"><i class="fas fa-comment-alt"></i> Message:</label>
      								<textarea class="form-control" rows="5" id="message" name="cmessage" required></textarea>
    							</div>
    							<div>
    								<input type="submit" name="csubmit" class="btn btn-dark">
    								<!-- <input class="btn btn-dark form-control" data-dismiss="modal" name="submit" type="submit"></input> -->
    							</div>
							</form>
						</div>
						
				</div>
			</div>
		</div>
		<br><br>
		<h1 class="text-center text-dark">About Us</h1><br><br>
	<center>
	<div class="row">
	    <div class="col-md-4">
	        <div class="card mdb-color lighten-2 text-center z-depth-2"  style="width:270px">
				<img src="1.jpeg" class="card-img-top" style="height:240px">
				<div class="card-body">
					<h3 class="card-title text-center">Jaimin Rana</h3>
					
					<a href="https://www.linkedin.com/in/jaimin-rana-2bb531186" target="_blank" class="btn btn-dark d-block"><i class="fab fa-linkedin"></i> LinkedIn</a>
				</div>
	        </div>
	    </div>
	    <div class="col-md-4">
	        <div class="card mdb-color lighten-2 text-center z-depth-2" style="width:270px">
	            <img src="2.jpeg" class="card-img-top" style="height:240px">
				<div class="card-body">
					<h3 class="card-title text-center">Denish Ranpariya</h3>
					
					<a href="https://www.linkedin.com/in/denish-ranpariya-428478167/" target="_blank" class="btn btn-dark d-block"><i class="fab fa-linkedin"></i> LinkedIn</a>
				</div>
	            </div>
	    </div>
	    <div class="col-md-4">
	        <div class="card mdb-color lighten-2 text-center z-depth-2" style="width:270px">
	            <img src="jenil.jpeg" class="card-img-top"  style="height:240px">
				<div class="card-body">
					<h3 class="card-title text-center">Jenil Savaliya</h3>
					
					<a href="https://www.linkedin.com/in/jenil-savaliya-4139391a8" target="_blank" class="btn btn-dark d-block"><i class="fab fa-linkedin"></i> LinkedIn</a>
				</div>
	        </div>
	</div>
	</center>
	
</body>
</html>


<?php
include 'connection.php';

if(isset($_POST['csubmit'])){
	$name=$_POST['cname'];
	$email=$_POST['cemail'];
	$message=$_POST['cmessage'];

	$insert_query="insert into contactus(name,email,message) values('$name','$email','$message')";
	$result=mysqli_query($con,$insert_query);
	if ($result) {
		# code...
		
		
	}
}

?>
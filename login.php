<?php
 // works
session_start();
ob_start();
if(!isset($_SESSION['message'])){
	$_SESSION['message']="You are logged out.Please login again.";
}

include 'connection.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
	</style>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
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
					<a href="#" class="nav-link" data-target="#mymodal" data-toggle="modal" >Contact Us</a>
				</li>
				<li class="nav-item">
					<a href="about.php" class="nav-link" target="_blank">About Us</a>
				</li>
			</ul>
			</div>
		</div>
	</nav><br><br>
	<div class="container">
<div class="modal fade" id="mymodal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="text-dark">Contact Us</h3>
						<button class="close" data-dismiss="modal">&times;</button>
						
					</div>
					<div class="modal-body">
							<form  method="POST" enctype="multipart/form-data" autocomplete="off">
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
		
		<h1 class="text-center text-dark">Login</h1><br><br>
		<div class="jumbotron col-lg-6  m-auto background">
			<h1 class="text-center text-dark">Welcome</h1>
			<p class="text-center text-dark font-weight-bold" style="font-size: 15px"><?php echo $_SESSION['message']; ?></p><br><br>
			<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" autocomplete="off">
				<div class="form-group">
					<label for="email"><i class="fas fa-envelope"></i> &nbsp;Email:</label>
					<input type="email" id="email" class="form-control" name="email" value="<?php if(isset($_COOKIE['emailcookie'])){echo $_COOKIE['emailcookie'];}?>" required>
				</div>
				<div class="form-group">
					<label for="password"><i class="fas fa-lock"></i> &nbsp;Password:</label>
					<input type="password" id="password" class="form-control" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Enter atleast one Uppercase,one lowercase,one special character and lenght should be more than 8 characters." value="<?php if(isset($_COOKIE['passwordcookie'])){echo $_COOKIE['passwordcookie'];}?>" required >
				</div>
				<div class="checkbox">
      				<label><input type="checkbox" name="rememberme"> Remember me</label>
    			</div>
				<div style="text-align: center">
					<input type="submit"  class="btn btn-dark" name="submit" value="Login">  
				</div>
				
				
			</form><br>
			<div style="text-align: center">
				<a href="registration.php" class="btn btn-warning">Don't have an account. <span class="text-primary"><u>Sign up</u></span></a>
			</div>
			
		</div>
	</div><br><br>



	
</body>
</html>

<?php
	
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$rememberme=$_POST['rememberme'];
		$email_search="select * from registration where email='$email' and status='active'";
		$query=mysqli_query($con,$email_search);

		$email_count=mysqli_num_rows($query);

		if($email_count){
			$email_pass=mysqli_fetch_assoc($query);
			$db_pass=$email_pass['password'];
			$_SESSION['name']=$email_pass['name'];


			$pass_decode=password_verify($password,$db_pass);
			if($pass_decode){
				if(isset($rememberme)){
					setcookie('emailcookie',$email,time() + (10 * 365 * 24 * 60 * 60));
					setcookie('passwordcookie',$password,time() + (10 * 365 * 24 * 60 * 60));
					header('location:index.php');
				}
				else{
					header('location:index.php');
				}
				
			}else{
				?>
				<script type="text/javascript">
					alert("Wrong Password");
				</script>
				<?php
			}
		}else{
			?>
				<script type="text/javascript">
					alert("Account Doesn't Exist.");
				</script>
			<?php
		}

	}

?>


<?php

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
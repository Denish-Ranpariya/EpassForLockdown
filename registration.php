<?php
	
	session_start();
	ob_start();
	include 'connection.php';	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
					<a href="registration.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<!-- <a href="#" class="nav-link">Contact Us</a> -->
					<a href="#" class="nav-link" data-target="#mymodal" data-toggle="modal">Contact Us</a>
				</li>
				<li class="nav-item">
					<!-- <a href="#" class="nav-link">Contact Us</a> -->
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


		<h1 class="text-center text-dark">Sign Up</h1><br><br>
		<div class="jumbotron col-lg-6  m-auto background">
			<h1 class="text-center text-dark">Welcome</h1>
			<p class="text-center text-dark font-weight-bold" style="font-size: 15px">Create an account here.</p><br><br>
			<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" autocomplete="off">
				<div class="form-group">
					<label for="name"><i class="fas fa-user"></i> &nbsp;Name:</label>
					<input type="text" name="fname" id="name" class="form-control" pattern="[a-zA-Z\s]+" title="Enter alphabets only" required>
				</div>
				<div class="form-group">
					<label for="email"><i class="fas fa-envelope"></i> &nbsp;Email:</label>
					<input type="email" name="email" id="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password"><i class="fas fa-lock"></i> &nbsp;Create Password:</label>
					<input type="password" name="password" id="password" class="form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Enter atleast one Uppercase,one lowercase,one special character and lenght should be more than 8 characters." required>
				</div>
				<div class="form-group">
					<label for="cpassword"><i class="fas fa-lock"></i> &nbsp;Confirm Password:</label>
					<input type="password" name="cpassword" id="cpassword" class="form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Enter atleast one Uppercase,one lowercase,one special character and lenght should be more than 8 characters." required>
				</div>
				<div style="text-align: center">
					<input type="submit" name="submit" class="btn btn-dark" value="Create Account">  
				</div>
				
			</form><br>

			

			<div style="text-align: center">
				<a href="login.php" class="btn btn-warning">Already have an account. <span class="text-primary"><u>Login</u></span></a>
			</div>
			
		</div>
	</div><br><br>
</body>
</html>


<?php 

	if(isset($_POST['submit'])){
		$name=mysqli_real_escape_string($con,$_POST['fname']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		$cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

		$pass=password_hash($password,PASSWORD_BCRYPT);
		$cpass=password_hash($cpassword,PASSWORD_BCRYPT);
		$token=bin2hex(random_bytes(15));

		$emailquery=" select * from registration where email='$email'";

		$query=mysqli_query($con,$emailquery);



		$email_count= mysqli_num_rows($query);

		// echo $email_count;
		if($email_count>0){
			?>
			<script type="text/javascript">
				alert("Email already exists");
			</script>
			<?php

		}else{
			if($password===$cpassword){
				$insertquery="insert into registration(name,email,password,cpassword,token,status) values('$name','$email','$pass','$cpass','$token','inactive')";
				$res=mysqli_query($con,$insertquery);
				if($res){
					
					$subject = "Email Verification";
					$body = "Hi,$name.Click on below link to activate your account.
http://localhost:8080/new/activate.php?token=$token";
					$headers = "From:epasslockdown2020@gmail.com";

					if (mail($email, $subject, $body, $headers)) {
					    $_SESSION['message']="Check your mail to activate your account at $email.";
					    header('location:login.php');
					} else {
					    echo "Email sending failed...";
					}
				}else{
					?>
						<script type="text/javascript">
							alert("Signup Failed.");
						</script>
					<?php
				}
			}else{
				?>
				<script type="text/javascript">
					alert("Password and confirm Password doesn't match.");
				</script>
				<?php
			}
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
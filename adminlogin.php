<?php
 // works
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
	<br>
	<h1 class="text-center text-dark">Welcome to admin login.</h1><br><br><br><br>
	<div class="jumbotron col-lg-6  m-auto background">
		<h1 class="text-center text-dark">Enter password for admin login</h1><br><br>
		<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data" autocomplete="off">
			<div class="form-group">
					<label for="password"><i class="fas fa-lock"></i> &nbsp;Password:</label>
					<input type="password" id="password" class="form-control" name="password"  required>
			</div>
			<div style="text-align: center">
					<input type="submit"  class="btn btn-warning" name="submit" value="Login">  
			</div>
		</form>
		
	</div>
	
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$password=$_POST['password'];
		if($password=="Adminepasslockdown$2020"){
			$_SESSION['userLogin'] = "Loggedin";
			header('location:admin.php');
		}else{
		?>
		<script type="text/javascript">
			alert("Wrong password, try again.");
		</script>
		<?php
	}
	}
?>
<?php

	include 'connection.php';
	
	session_start();
	if(!isset($_SESSION['name'])){
		header('location:login.php');
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
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
					<a href="registration.php" class="nav-link" target="_blank">Home</a>
				</li>
				<li class="nav-item">
					<!-- <a href="#" class="nav-link">Contact Us</a> -->
					<a href="#" class="nav-link" data-target="#mymodal" data-toggle="modal">Contact Us</a>
				</li>
				<li class="nav-item">
					<a href="about.php" class="nav-link" target="_blank">About Us</a>
				</li>
				<li class="nav-item">
					<a href="logout.php" class="nav-link">Logout</a>
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


		<div class="jumbotron background">
		
				<h3 class="text-center text-dark">If you have already registered then click on this button.</h3><br>	
				<center>
					<button class="btn btn-warning" data-target="#statusmodal" data-toggle="modal">Check status</button><br><br>
					
					<p class="text-center text-dark">
						<?php
							if(isset($_POST['checkstatus'])){
								$epass=trim($_POST['epassid']);
								$select_query="select * from personal where epassid='$epass'";
								$query_result=mysqli_query($con,$select_query);
								$final_result=mysqli_fetch_assoc($query_result);
								if($query_result){
									echo "Your status is ".$final_result['status'].".<br>You will get notified via email when your status changes.";
								}

								
							}
						?>
					</p>
				</center>

				<div class="modal fade" id="statusmodal">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="text-dark">Check Status</h3>

								<button class="close" data-dismiss="modal">&times;</button>
								
							</div>
							<div class="modal-body">
									<form method="POST" enctype="multipart/form-data" autocomplete="off">
										<div class="form-group">
											<label for="epassid"><i class="fas fa-id-card"></i></i> Epass id:</label>
											<input type="text" name="epassid" id="epassid" class="form-control" required>  
										</div>
										<div class="form-group">

											<input type="submit" name="checkstatus" class="form-control btn btn-dark " value="Check status">
											<!-- //<button class="btn btn-dark " data-dismiss="modal">Sign Up</button> -->
										</div>
									</form>
								</div>
								
						</div>
					</div>
				</div>
		</div>

		<h1 class="text-center text-dark">Application form for Epass Request</h1><br><br>
















		<div class="jumbotron col-lg-6  m-auto background">
			<h1 class="text-center text-dark">Fill up below form</h1>
			<p class="text-center text-dark font-weight-bold" style="font-size: 15px">Welcome <?php echo $_SESSION['name'];?>.</p><br><br>


			<form method="POST" action="upload.php" enctype="multipart/form-data"  autocomplete="off">
				<div class="form-group">
					<label for="name"><i class="fas fa-user"></i> &nbsp;Full Name:</label>
					<input type="text" id="name" class="form-control" name="name" pattern="[a-zA-Z\s]+" title="Enter the alphabets only" required>
				</div>




				<div class="form-group">
					<label><i class="fas fa-venus-mars"></i> Gender:&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<label class="radio-inline"> <input type="radio" name="gender" value="male" checked>&nbsp;Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label class="radio-inline"><input type="radio" value="female" name="gender">&nbsp;Female</label>
				</div>

				<div class="form-group">
					<label for="number"><i class="fas fa-phone-alt"></i> &nbsp;Contact Number:</label>
					<input type="text"  id="number" class="form-control" name="mobile" pattern="^\d{10}$" title="Enter the phone number in proper format" required>
				</div>
				
				<div class="form-group">
					<label for="wnumber"><i class="fab fa-whatsapp"></i> &nbsp;WhatsApp Number(optional):</label>
					<input type="text"  id="wnumber" class="form-control" name="wmobile" value="" pattern="^\d{10}$" title="Enter the phone number in proper format">
				</div>


				<div class="form-group">
					<label for="email"><i class="fas fa-envelope"></i> &nbsp;Email:</label>
					<input type="email"  id="email" class="form-control" name="email" required>
				</div>

				<div class="form-group">
      				<label for="resaddress"><i class="fas fa-home"></i> Residential Address:</label>
      				<textarea class="form-control" rows="5" id="resaddress" name="resaddress"  required></textarea>
    			</div>

    			<div class="form-group">
      				<label for="offaddress"><i class="fas fa-building"></i> Address of office or place to engage:</label>
      				<textarea class="form-control" rows="5" id="offaddress" name="offaddress" required></textarea>
    			</div>

    			<div class="form-group">
				  <label for="service">Type of service:</label>
				  <select class="form-control" id="service" name="service" required>
				    	<option value="" selected>------</option>

						  <option value="food items">Food items, groceries</option>

						  <option value="general provision store">General Provision stores</option>

						  <option value="take away/home delivery">Take away/home delivery in restaurants.</option>

						  <option value="E-commerce">E-commerce of all essential goods including food, pharmaceutical and medical equipments</option>

						  <option value="fair price shops">Fair Price Shops (Public Distribution System)</option>

						  <option value="health">Health (including Veterinary Health Care facilities)</option>

						  <option value="electricity">Electricity</option>

						  <option value="water">Water</option>

						  <option value="milk plants">Milk plants</option>

						  <option value="banker">Cashier/Teller operations of banks (including ATMs)</option>

						  <option value="chemist/pharmacies">Chemists and Pharmacies.</option>

						  <option value="caregiver for Person with Disabilites.">Caregiver for Person with Disabilites.</option>

						  <option value="print/electronic media">Print and Electronic Media</option>

						  <option value="pay and account office">Pay and Accounts Office (only for salary/wages/contingent/health/essential services related expenditure)</option>

						  <option value="telecom/internet/postal services">Telecom, Internet and Postal services</option>

						  <option value="fuel">Petrol pumps, LPG/CNG/Oil agencies (including their godown and transportationrelated activities)</option>

						  <option value="animal fodder">Animal fodder</option>

						  <option value="construction">Construction/maintenance/manufacturing, processing, transportation, distribution, storage related to all the above services</option>

						  <option value="stock market services">SEBI regulated Stock market entities and the essential staff related to stock market services.</option>

						  <option value="fire">Fire</option>

						  <option value="prisons">Prisons</option>

						  <option value="municipal services">Municipal Services</option>

						  <option value="legislative assembly of state">Activities related to functioning of Legislative Assembly of state</option>

						  <option value="law and order">Offices charged with law and order and magisterial duties</option>

						  <option value="police">Police</option>

						  <option value="any other essential service tht may be exempted by the government">Any other essential service/establishment that may be exempted by the Government</option>

						  <option value="government employee">Government Employees</option>
				  </select>
				</div>

				<div class="form-group">
					<label for="fdate"><i class="fas fa-calendar-day"></i> &nbsp;From date:</label>
					<input type="date" id="fdate" class="form-control" name="fdate" required>
				</div>

				<div class="form-group">
					<label for="tdate"><i class="fas fa-calendar-day"></i> &nbsp;To date:</label>
					<input type="date"  id="tdate" class="form-control" name="tdate" required>
				</div>

				<div class="form-group">
					<label for="ftime"><i class="fas fa-clock"></i> &nbsp;From time:</label>
					<input type="time" id="ftime" class="form-control" name="ftime" required>
				</div>

				<div class="form-group">
					<label for="ttime"><i class="fas fa-clock"></i> &nbsp;To time:</label>
					<input type="time"  id="ttime" class="form-control" name="ttime" required>
				</div>

				<div class="form-group">
					<label for="district"><i class="fas fa-map-marker-alt"></i> &nbsp;District:</label>
					<input type="text"  id="district" class="form-control" pattern="[a-zA-Z\s]+" title="Enter the alphabets only" name="district" required>
				</div>

				<p><i class="fas fa-portrait"></i> Upload your passport size photo(PNG/JPG/JPEG):</p>
				<div class="custom-file">
                	<input type="file" class="custom-file-input" id="inputGroupFile01" name="passportphoto" required>
                	<label class="custom-file-label" for="inputGroupFile01">Upload Passport size photo</label>
            	</div><br><br>

            	<script>
		            $('#inputGroupFile01').on('change',function(){
		                //get the file name
		                var fileName = $(this).val();
		                //replace the "Choose a file" label
		                $(this).next('.custom-file-label').html(fileName);
		            });
        		</script>

        		<p><i class="fas fa-file-image"></i> Upload your id card<br>
(aadhar card/voter id card/passport/driving licence)(PNG/JPG/JPEG):</p>
				<div class="custom-file">
                	<input type="file" class="custom-file-input" id="inputGroupFile02"  name="idphoto" required>
                	<label class="custom-file-label" for="inputGroupFile02">Choose file</label>
            	</div><br><br>

            	<script>
		            $('#inputGroupFile02').on('change',function(){
		                //get the file name
		                var fileName = $(this).val();
		                //replace the "Choose a file" label
		                $(this).next('.custom-file-label').html(fileName);
		            });
        		</script>

        		<p><i class="fas fa-file-image"></i> Upload other documents<br>
(visiting card/shop licence/business card/medical report)(PNG/JPG/JPEG):</p>
        		<div class="custom-file">
                	<input type="file" class="custom-file-input" id="inputGroupFile03"  name="otherphoto" required>
                	<label class="custom-file-label" for="inputGroupFile03">Choose file</label>
            	</div><br><br>

            	<script>
		            $('#inputGroupFile03').on('change',function(){
		                //get the file name
		                var fileName = $(this).val();
		                //replace the "Choose a file" label
		                $(this).next('.custom-file-label').html(fileName);
		            });
        		</script>
				

	
				
				
				
				<div style="text-align: center">
					<input type="submit" name="submit" class="btn btn-dark" value="Apply now">  
				</div>
				
				
			</form><br>
			
			
		</div>
	</div><br><br>


	
		
		
		
</body>
</html>

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




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
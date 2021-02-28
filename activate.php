<?php

session_start();
include 'connection.php';


if(isset($_GET['token'])){
	$token=$_GET['token'];
	$update_query="update registration set status='active' where token='$token'";
	$res=mysqli_query($con,$update_query);
	if($res){
		if(isset($_SESSION['message'])){
			$_SESSION['message']="Your account has been activated.Now you can login.";
			header('location:login.php');
		}else{
			$_SESSION['message']="Account not updated.";
			header('location:login.php');
		}
	}else{
		$_SESSION['message']="Account not updated.";
		header('location:registration.php');
	}
}


?>
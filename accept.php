<?php 
	include 'connection.php';

	$ids=$_GET['id'];
	$update_query="update personal set status='accepted' where id=$ids";
	$result=mysqli_query($con,$update_query);
	$select_query="select * from personal where id=$ids";
	$r=mysqli_query($con,$select_query);
	$fetch=mysqli_fetch_array($r);
	
	if ($result) {
		# code...
		$to_email = $fetch['email'];
		$subject = "Epass request accepted";
		$body = "Hi,".$fetch['name'].".Your request for epass is accepted for epass id:".$fetch['epassid'];
		$headers = "From:epasslockdown2020@gmail.com";

		if (mail($to_email, $subject, $body, $headers)) {
		    header('location:admin.php');
		} else {
		    header('location:admin.php');
		}
	}

?>
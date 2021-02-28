<?php

$username="root";
$password="";
$server='localhost';
$database='epassforlockdown';

$con=mysqli_connect($server,$username,$password,$database);

//$con=mysqli_connect($server,$username,$password);
//$db=mysqli_select_db($con,$database);


if($con){
	?>
	<!-- <script type="text/javascript">
		alert("Connection Successful.");
	</script> -->
<?php
}else{
	// echo "connection not successful.";
	die("no connection.".mysqli_connect_error());
}
?>
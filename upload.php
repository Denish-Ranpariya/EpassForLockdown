<?php

	include 'connection.php';
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$mobile=$_POST['mobile'];
		$wmobile=$_POST['wmobile'];
		$email=$_POST['email'];
		$resaddress=$_POST['resaddress'];
		$offaddress=$_POST['offaddress'];
		$service=$_POST['service'];
		$fdate=$_POST['fdate'];
		$tdate=$_POST['tdate'];
		$ftime=$_POST['ftime'];
		$ttime=$_POST['ttime'];
		$district=$_POST['district'];
		$status='pending';
		  //todotodotodotodo
		$passportphoto=$_FILES['passportphoto'];
		$idphoto=$_FILES['idphoto'];
		$otherphoto=$_FILES['otherphoto'];

		$res1=explode(".",$passportphoto['name']);
		$res2=explode(".",$idphoto['name']);
		$res3=explode(".",$otherphoto['name']);


		$trimmed_name=str_replace(' ','',$name);
		$epassid="$trimmed_name".md5(rand());

		$extention1=strtolower(end($res1));
		$extention2=strtolower(end($res2));
		$extention3=strtolower(end($res3));

		$passportphoto['name']="$epassid".'_1'.".$extention1";
		$idphoto['name']="$epassid".'_2'.".$extention2";
		$otherphoto['name']="$trimmed_name"."$mobile".'_3'.".$extention3";


		$filename1=$passportphoto['name'];
		$filename2=$idphoto['name'];
		$filename3=$otherphoto['name'];

		$filepath1=$passportphoto['tmp_name'];
		$filepath2=$idphoto['tmp_name'];
		$filepath3=$otherphoto['tmp_name'];

		$fileerror1=$passportphoto['error'];
		$fileerror2=$idphoto['error'];
		$fileerror3=$otherphoto['error'];

		$valid_extension=array('png','jpg','jpeg');

		

		$valid1=in_array($extention1,$valid_extension);
		$valid2=in_array($extention2,$valid_extension);
		$valid3=in_array($extention3,$valid_extension);

		if($fileerror1==0 && $fileerror2==0 && $fileerror3==0){
			if($valid1 && $valid2 && $valid3){
				$destfile1='upload/'.$filename1;
				$destfile2='upload/'.$filename2;
				$destfile3='upload/'.$filename3;
				move_uploaded_file($filepath1,
					$destfile1);
				move_uploaded_file($filepath2,
					$destfile2);
				move_uploaded_file($filepath3,
					$destfile3);
				$insert_query="insert into personal(name,gender,number,wnumber,email,raddress,offaddress,service,fdate,tdate,ftime,ttime,district,status,epassid,passportphoto,idphoto,otherphoto) values('$name','$gender','$mobile','$wmobile','$email','$resaddress','$offaddress','$service','$fdate','$tdate','$ftime','$ttime','$district','$status','$epassid','$destfile1','$destfile2','$destfile3')";
				$res=mysqli_query($con,$insert_query);
				if($res){
					
					$subject = "Your Epass id";
					$body = "Hello,$name.
					Your Epass id is: $epassid
					Keep it handy.By this epass id you can check the status of your request on the website.";
					$headers = "From:epasslockdown2020@gmail.com";

					if (mail($email, $subject, $body, $headers)) {
    					?>
    					<script type="text/javascript">
    						alert("We have sent a mail to your email id,please check it.");
    						 window.location="index.php";
    					</script>

    					<?php
    					// header('location:index.php');
					} else {
    					?>
    					<script type="text/javascript">
    						alert("...");
    						window.location="index.php";
    					</script>
    					<?php
    					// header('location:index.php');
    				}
					?>
					<?php
				}
			}else{
			?>
				<script type="text/javascript">
					alert("upload the file with valid extension.");
					window.location="index.php";
				</script>
			<?php	
			// header('location:index.php');
		}
		}
	}
		// print_r($passportphoto);
		// print_r($idphoto);
		// print_r($otherphoto);
?>


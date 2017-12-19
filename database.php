<?php 

	
session_start();
$error=$success=$goback=$contacterror=$lerror='';
$errorH=$errorI=$errorT=$errorD=$errorL='';

//sql injection prevent   
function dbsec($connect,$string){

	return mysqli_real_escape_string($connect,$string);
}

//login 

if (isset($_POST['login'])) {
	
	if (!empty($_POST['loginusername']) and !empty($_POST['loginpassword'])) {
		
		$loginusername=$_POST['loginusername'];
		$loginpassword=$_POST['loginpassword'];

			$loginsql="SELECT * FROM ApprovedRegistration WHERE UserName='".dbsec($connect,$loginusername)."' And Password='".dbsec($connect,$loginpassword)."' ";
			$loginquery=mysqli_query($connect,$loginsql);
			$count1=mysqli_num_rows($loginquery);
			$array=mysqli_fetch_array($loginquery);


			if ($count1==1) {
				$_SESSION['id']=$array['NIC'];
				$_SESSION['name']=$array['FullName'];
			

				header("Location:Home.php");
			}else{$lerror="username or password error";}



	}else{

	$lerror="Enter username and password ";
	}


}
//Register query 


if (isset($_POST['register'])) {
	

		if (empty($_POST['fullname']) or empty($_POST['registerusername']) or empty($_POST['registerpassword']) or empty($_POST['email']) or empty($_POST['NIC'])or empty($_POST['jobtitle']))    {
			

		$error_name='fill the name';$error_username='enter a user name';$error_password='must set a password';$error_email='give us an email';$error_job='add your job title';$error_NIC='Enter NIC';




		}else{

			if(strlen($_POST['NIC'])==10){

				 $NIC=$_POST['NIC'];
			}else{$error_NIC="Check NIC";}

			$cheackusername=$_POST["registerusername"];
			$Check="SELECT * FROM ApprovedRegistration WHERE UserName='".dbsec($connect,$cheackusername)."'";
			$cq=mysqli_query($connect,$Check);
			$count=mysqli_num_rows($cq);
			if($count>=1){$error_username="user name already taken.try new one";}else{$uname=$_POST['registerusername'];}
			if($_POST['registerpassword']==$_POST['Checkregisterpassword']){$pwd=$_POST['registerpassword'];}else{$error_password="password doesn't match";}
			

			$name=$_POST['fullname'];
			
			if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
				$email= $_POST['email'];
			}else{$error_email="Invalid email";}
			
				
				 $title=$_POST['jobtitle'];
				 
				 $address=$_POST['address'];

				 if(!empty($NIC)and!empty($uname)and!empty($pwd)and!empty($name)and!empty($email)and!empty($title)and!empty($address)){

		$enterregister="INSERT INTO `webproject2017`.`PendingRegistration`(`NIC`,`FullName`,`UserName`,`Password`,`Email`,`JobTitle`,`Address`) VALUES ('".dbsec($connect,$NIC)."','".dbsec($connect,$name)."','".dbsec($connect,$uname)."','".dbsec($connect,$pwd)."','".dbsec($connect,$email)."','".dbsec($connect,$title)."','".dbsec($connect,$address)."');";
		  $connect->query($enterregister);
		$success="Registration request sent.";
		  $goback="<a href='Home.php'>Click to go back Home Page</a>";
		}



		}


}






//pending post 
$filldetails=$sentdetails='';

if (isset($_POST['sendreport'])) {

	if (!empty($_POST['pheadline'])) {
		
		$pheadline=$_POST['pheadline'];

	}else{$errorH='fill the title';}


	if (!empty($_POST['preporter'])) {
		
		if(strlen($_POST['preporter'])==10){
				$preporter=strtoupper($_POST['preporter']);

		}else{$errorI="Cheack your NIC ";}

	}else{$errorI='Enter NIC';}


	if (!empty($_POST['ptype'])and $_POST['ptype']!=="Disaster Type" ) {
		
		$ptype=$_POST['ptype'];
	}else{
		$errorT="Select Type";}


	if(!empty($_POST['pdescription'])){

				$pdescription=$_POST['pdescription'];

			}else{$errorD="Discribe the situation";}
	
	if(!empty($_POST['plocation'])){
			 $plocation=$_POST['plocation'];
	}else{$errorL="select the location";}	

	}


	
if (!empty($pheadline) and  !empty($preporter) and  !empty($ptype) and  !empty($pdescription) and !empty($plocation)  ) {

	 
	 $sendreport="INSERT INTO `webproject2017`.`PendingReport`(`ReporterID`,`Type`,`Description`,`Topic`,`Location`) VALUES ('$preporter','$ptype','$pdescription','$pheadline','$plocation');";
	 $connect->query($sendreport);
	 $sentdetails='Your report submitted successfully!';

}




// registration accept and regect


if (isset($_POST['Accept'])) {
	
				$idregistration=$_POST['NIC'];


			
				$aceptstatement="INSERT INTO `ApprovedRegistration`(SELECT*FROM PendingRegistration WHERE NIC='".dbsec($connect,$idregistration)."')";
				$connect->query($aceptstatement);



				$delete="DELETE FROM `PendingRegistration` WHERE NIC='".dbsec($connect,$idregistration)."'";

				$connect->query($delete);





			}

if (isset($_POST['Reject'])) {
	

     $idregistration=$_POST['NIC'];

	  $delete="DELETE FROM `PendingRegistration` WHERE NIC='".dbsec($connect,$idregistration)."'";

				$connect->query($delete);

			


 }

			
// pending post adjustment 


if (isset($_POST['reportaccept']) and !empty($_POST['rating'])) {
	
			  $report=$_POST['RID'];
			  $rate=$_POST['rating'];

			
				$acceptpost="INSERT INTO `ApprovedReport`(`RID`,`ReporterID`,`Type`,`Description`,`Topic`,`Location`)(SELECT*FROM PendingReport WHERE RID='$report')";
				 $connect->query($acceptpost);

				$setrate="UPDATE`ApprovedReport` SET Rating='$rate'  WHERE RID='$report' ";

				$connect->query($setrate);


				$delete="DELETE FROM `PendingReport` WHERE RID='$report'";

			  $connect->query($delete);

	}else{

				 $error="please set threat level";
	}


if (isset($_POST['reportreject'])) {
	
			$report=$_POST['RID'];
			$getidsql="SELECT* FROM PendingReport WHERE RID='".dbsec($connect,$report)."' ";
			$idq=$connect->query($getidsql);

			$getid=mysqli_fetch_array($idq);
			$MNIC=$getid['ReporterID'];
			$Mmsg="your post has been rejected.Please contact or re submit.";

				$delete="DELETE FROM `PendingReport` WHERE RID='$report' ";

				$connect->query($delete);

				

					$amsgsql="INSERT INTO Messages(`NIC`,`Message`) VALUES('$MNIC','$Mmsg')  ";
					$connect->query($amsgsql);


}

//Homepage post delete by admin


if (isset($_POST['homepostdelete'])) {
	
	$report=$_POST['RID'];

	$delete="DELETE FROM `ApprovedReport` WHERE RID='$report'";
	$connect->query($delete);


}



//uploading profile photo

if (isset($_POST['upload'])) {
	
		$photoname=$_SESSION['id'];

		$save="images/profile/";
		$filename=$_FILES['select']['name'];
		if (file_exists($save.$filename)) {

			
			
		}else{

			move_uploaded_file($_FILES['select']['tmp_name'],$save.$photoname);
			
			header("Refresh:0");


		}

}

//admin edit functionality

if (isset($_POST['done'])) {
		     echo $report=$_POST['RID'];
						echo  $rate=$_POST['rating'];

				$setrate="UPDATE`ApprovedReport` SET Rating='$rate'  WHERE RID='$report' ";

						$connect->query($setrate);

						header("Location:Home.php");

}

//admin user remove
if (isset($_POST['removeuser'])) {
	

		$user=$_POST['NIC'];

			$delete="DELETE FROM `ApprovedRegistration` WHERE NIC='$user'";
			$connect->query($delete);

}


//contact form
if(isset($_POST['contact'])){

  if(empty($_POST['cname']) or empty($_POST['cNIC']) or empty($_POST['cmsg'])){

$contacterror="Fill above details";

}else{

	if(strlen($_POST['cNIC'])!==10){$contacterror="Cheack NIC";}else{$cNIC=$_POST['cNIC'];}

	if(strlen($_POST['cmsg'])>255){$contacterror="Too long message.limit to 255 charactors";}else{$cmsg=$_POST['cmsg'];}

   $cname=$_POST['cname'];


	if(isset($cname)and isset($cNIC) and isset($cmsg) ){


		echo	$cmessage="name:".$cname."<br>"."NIC:".$cNIC."<br>"."Message:".$cmsg;
		mail("srt.sahan@gmail.com","REPORT:",$cmessage);
			$contacterror="Thanks for contacting us.we will reach to you soon.";


	}

}

}



?>
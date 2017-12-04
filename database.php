<?php 

	
session_start();
$error='';
//login 

if (isset($_POST['login'])) {
	
	if (!empty($_POST['loginusername']) and !empty($_POST['loginpassword'])) {
		
		$loginusername=$_POST['loginusername'];
		$loginpassword=$_POST['loginpassword'];

			$loginsql="SELECT * FROM ApprovedRegistration WHERE UserName='$loginusername' And Password='$loginpassword' ";
			$loginquery=mysqli_query($connect,$loginsql);
			$count1=mysqli_num_rows($loginquery);
			$array=mysqli_fetch_array($loginquery);


			if ($count1==1) {
				$_SESSION['id']=$array['NIC'];
				$_SESSION['name']=$array['FullName'];
			

				header("Location:Home.php");
			}



	}else{

		header("Location:login.php");
	}


}
//Register query 


if (isset($_POST['register'])) {
	

if (empty($_POST['fullname']) or empty($_POST['registerusername']) or empty($_POST['registerpassword']) or empty($_POST['email']) or empty($_POST['NIC'])or empty($_POST['jobtitle']) or empty($_POST['jobid'])        ) {
	

$error_name='fill the name';$error_username='enter a user name';$error_password='must set a password';$error_email='give us an email';$error_job='add your job title';$error_NIC='Enter NIC';$error_eid='Enter Employee Id';





}else{

	$name=$_POST['fullname'];
	$uname=$_POST['registerusername'];
	$pwd=$_POST['registerpassword'];
	$email= $_POST['email'];
		 $NIC=$_POST['NIC'];
		 $title=$_POST['jobtitle'];
		 $EID=$_POST['jobid'];
		 $address=$_POST['address'];

$enterregister="INSERT INTO `webproject2017`.`PendingRegistration`(`NIC`,`FullName`,`UserName`,`Password`,`Email`,`JobTitle`,`EmployeeId`,`Address`) VALUES ('$NIC','$name','$uname','$pwd','$email','$title','$EID','$address');";
  $connect->query($enterregister);

  header("Location:Home.php");
}


}

//pending post 
$filldetails=$sentdetails='';

if (isset($_POST['sendreport'])) {
	
if (!empty($_POST['pheadline']) and !empty($_POST['preporter']) and !empty($_POST['ptype']) and !empty($_POST['pdescription']) and !empty($_POST['plocation'])  ) {

	 $pheadline=$_POST['pheadline'];
	 $preporter=$_POST['preporter'];
	 $ptype=$_POST['ptype'];
	 $pdescription=$_POST['pdescription'];
	 $plocation=$_POST['plocation'];

	 $sendreport="INSERT INTO `webproject2017`.`PendingReport`(`ReporterID`,`Type`,`Description`,`Topic`,`Location`) VALUES ('$preporter','$ptype','$pdescription','$pheadline','$plocation');";
	 $connect->query($sendreport);
	 $sentdetails='Your report submitted successfully!';



	
}else{


$filldetails="please fill above details beforre submit";




}


}

// registration accept and regect


if (isset($_POST['Accept'])) {
	
				$idregistration=$_POST['NIC'];


			
				$aceptstatement="INSERT INTO `ApprovedRegistration`(SELECT*FROM PendingRegistration WHERE NIC='$idregistration')";
				$connect->query($aceptstatement);
				$delete="DELETE FROM `PendingRegistration` WHERE NIC='$idregistration'";

				$connect->query($delete);


			}

if (isset($_POST['Reject'])) {
	

$idregistration=$_POST['NIC'];

	$delete="DELETE FROM `PendingRegistration` WHERE NIC='$idregistration'";

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

	$delete="DELETE FROM `PendingReport` WHERE RID='$report' ";

				$connect->query($delete);

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
			
			header("Location:profile.php");


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




?>
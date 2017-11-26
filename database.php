<?php 
	session_start();

$error_name=$error_username=$error_password=$error_email=$error_job=$error_NIC=$error_eid='';

$connect=mysqli_connect("localhost","root","");
if (!$connect) {
	echo "Connection error";
}
$data_select= mysqli_select_db($connect,'webproject2017');


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
				$_SESSION['id']=$array['FullName'];
			

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


if (isset($_POST['reportaccept'])) {
	
				  $report=$_POST['RID'];


			
				$acceptpost="INSERT INTO `ApprovedReport`(SELECT*FROM PendingReport WHERE RID='$report')";
				$connect->query($acceptpost);
				$delete="DELETE FROM `PendingReport` WHERE RID='$report'";

			$connect->query($delete);


			}


if (isset($_POST['reportreject'])) {
	
$report=$_POST['RID'];

	$delete="DELETE FROM `PendingReport` WHERE RID='$report' ";

				$connect->query($delete);

}

?>
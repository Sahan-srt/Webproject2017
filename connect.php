<?php


$error_name=$error_username=$error_password=$error_email=$error_job=$error_NIC=$error_eid='';

$connect=mysqli_connect("localhost","root","");
if (!$connect) {
	echo "Connection error";
}
$data_select= mysqli_select_db($connect,'webproject2017');








  ?>

<?include "top.php";


?>
<!DOCTYPE html>
<html>
  <head>
  

  <body>
  		<?

  		$mailsql="SELECT Email FROM ApprovedRegistration,ApprovedReport WHERE `ApprovedRegistration`.NIC=`ApprovedReport`.ReporterID ";

  		$mailq=$connect->query($s);
  		$mailrow=mysqli_fetch_array($mailq);


  		

  	
		?>
  </body>


</html>
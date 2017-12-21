<?php include "top.php";

if (!isset($_SESSION['id'])) {
	header("Location:login.php");
}

?>

<body>

	<div  class="container-fluid" id="adminwrap">
		<div id="buttonlink">
			<div id="b1">
			<a  href="submitPost.php"><button  type="button" class="btn btn-primary btn-circle btn-lg" >P</button>
				<p>Post news</p>
			</a>
		</div><div id="b2">
				<a  href="userpanel.php"><button  type="button" class="btn btn-primary btn-circle btn-lg" >U</button>
				<p>User details</p>
			</a></div>
		</div>
		
	<div class="row" id="contentofadmin">

		<div id="pending_news">
	<div class="col-sm"  >
		<h3>pending news</h3>

		<?php 

		$selectReport="SELECT*FROM PendingReport ";
		$reportQuery=mysqli_query($connect,$selectReport);
		while ($reportresults=mysqli_fetch_array($reportQuery)) {
			
		$reportid=$reportresults['RID'];




		 ?>
	<table class="table table-secondary" >

		<tbody>
				<tr>
				

					<td>
							<div class="card">
							 <div class="card-header">
							    <?php echo $reportresults['Topic'];?>
							  </div>
							  <div class="card-body">
							    <h5 class="card-title">Reported by:<?php echo $reportresults['ReporterID'];?></h5>
							  <h5 class="card-title">Type:<?php echo $reportresults['Type'];?></h5>
							  <p><h4>Description</h4>
							  	<?php echo $reportresults['Description'];?>
							


							  </p>
							  <h5>Location:<?php echo $reportresults['Location'];?></h5>
							 
							  
							  
							    
							  </div>
							</div>


							<form method="POST" >
								<input type="hidden" name='RID' value="<?php echo $reportid;?>">
								<label>Select Threat level</label>
								<select name="rating" >
								<option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>


							</select>
							<button type="submit" class="btn btn-primary btn-sm" name="reportaccept">Accept</button>
							<button type="submit" class="btn btn-primary btn-sm" name="reportreject">Reject
							<button type="submit" class="btn btn-primary btn-sm">Edit</button>
							<span><?php echo $error;?></span>

							</form>



					</td>

				
			</tr>
		</tbody>
		<?php  }?>

	</table>

	</div>
</div>


<!-- end of incident reports -->
<div id="pending_registrations">
	<div class="col-sm" >
		<h3>pending registrations</h3>

		<?php 
		
		$selectRequest="SELECT*FROM PendingRegistration ";
		$reqQuery=mysqli_query($connect,$selectRequest);
		while ($rowresults=mysqli_fetch_array($reqQuery)) {
			
		$registrationid=$rowresults['NIC'];

	?>
		
<table class="table ">

		<tbody>
			<tr>
				

					<td>
							<div class="card">
							 <div class="card-header">
							
							  </div>
							  <div class="card-body">
							    <h5 class="card-title">Full Name:<?php  echo $rowresults['FullName'] ?></h5>
							  <h5 class="card-title">Occupation:<?php echo $rowresults['JobTitle'] ?></h5>
							  <h5 class="card-title">NIC:<?php  echo $rowresults['NIC'] ?></h5>
							  <h5 class="card-title">Post ID/Employee ID:<?php echo $rowresults['EmployeeId'] ?></h5>
							  <h5 class="card-title">Email:<?php echo $rowresults['Email'] ?></h5>
							  
							  <h5 class="card-title">Address:<?php echo $rowresults['Address'] ?></h5>
							  
							  
							  
							    
							  </div>
							</div>


							<form method="POST">
								<input type="hidden" name="NIC" value="<?php  echo $registrationid;?>" >
							<button type="submit" class="btn btn-primary btn-sm" name="Accept">Accept
							<button type="submit" class="btn btn-primary btn-sm" name="Reject">Reject
						</form>
							


	


							


					</td>

				
			</tr>
				


		</tbody>


	</table>
	<?php }?>	


	</div>

	</div>
</div>
</div>


<?php include "footer.php";?>

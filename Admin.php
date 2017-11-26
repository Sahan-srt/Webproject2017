<?include "top.php";?>

<body><div  class="container-fluid">

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
							    <?echo $reportresults['Topic'];?>
							  </div>
							  <div class="card-body">
							    <h5 class="card-title">Reported by:<?echo $reportresults['ReporterID'];?></h5>
							  <h5 class="card-title">Type:<?echo $reportresults['Type'];?></h5>
							  <p><h4>Description</h4>
							  	<?echo $reportresults['Description'];?>
							


							  </p>
							  <h5>Location:<?echo $reportresults['Location'];?></h5>
							 
							  
							  
							    
							  </div>
							</div>


							<form method="POST" >
								<input type="hidden" name='RID' value="<?echo $reportid;?>">
							<button type="submit" class="btn btn-primary btn-sm" name="reportaccept">Accept
							<button type="submit" class="btn btn-primary btn-sm" name="reportreject">Reject
							<button type="submit" class="btn btn-primary btn-sm">Edit
							</form>



					</td>

				
			</tr>
		</tbody>
		<? }?>

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
							    <h5 class="card-title">Full Name:<? echo $rowresults['FullName'] ?></h5>
							  <h5 class="card-title">Occupation:<? echo $rowresults['JobTitle'] ?></h5>
							  <h5 class="card-title">NIC:<? echo $rowresults['NIC'] ?></h5>
							  <h5 class="card-title">Post ID/Employee ID:<? echo $rowresults['EmployeeId'] ?></h5>
							  <h5 class="card-title">Email:<? echo $rowresults['Email'] ?></h5>
							  
							  <h5 class="card-title">Address:<? echo $rowresults['Address'] ?></h5>
							  
							  
							  
							    
							  </div>
							</div>


							<form method="POST">
								<input type="hidden" name="NIC" value="<? echo $registrationid;?>" >
							<button type="submit" class="btn btn-primary btn-sm" name="Accept">Accept
							<button type="submit" class="btn btn-primary btn-sm" name="Reject">Reject
						</form>
							


	


							


					</td>

				
			</tr>
				


		</tbody>


	</table>
	<?}?>	


	</div>

	</div>
</div>
</div>


<?include "footer.php";?>

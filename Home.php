<?include "top.php";


?>
<body>

<div class="middle">

	<div class="col-sm"  >
		<h3> ....</h3>

		<?php 
		
		$selectReport="SELECT*FROM ApprovedReport ";
		
		


		$reportQuery=mysqli_query($connect,$selectReport);
		while ($createarray=mysqli_fetch_array($reportQuery)) {
		$RID=$createarray['ReporterID'];

			$selectRepotername="SELECT FullName FROM ApprovedRegistration  WHERE NIC='$RID' ";
		$dbrepotername=mysqli_query($connect,$selectRepotername);
		while($arrayquery=mysqli_fetch_array($dbrepotername)){

		$name=$arrayquery['FullName'];

		

		}


		 ?>
	<table class="table table-secondary" >

		<tbody >
				<tr>
				

					<td>
							<div class="card">
							 <div class="card-header">
							    <?echo $createarray['Topic'];?>
							  </div>
							  <div class="card-body">
							    <h5 class="card-title">Reported by:<?echo $name; ?></h5>
							  <h5 class="card-title">Type:<?echo $createarray['Type']; ?></h5>
							  <p><h4>Description:</h4>

							  	<?echo $createarray['Description']; ?>

							  </p>
							  <h5>Location:<?echo $createarray['Location']; ?></h5>
							  <iframe width="70%" src="https://www.google.com/maps/embed/v1/place?q=<?echo $createarray['Location']; ?>
						      &zoom=15
						      &key= AIzaSyDiBdV4rnRhdnlRUxfEK49A-KZDQL8swyQ ">
						  </iframe>
													  
							  
							    
							  </div>
							</div>


							<form>
							<button type="button" class="btn btn-primary btn-sm">Accept
							<button type="button" class="btn btn-primary btn-sm">Reject
							<button type="button" class="btn btn-primary btn-sm">Edit</form>



					</td>

				
			</tr>
		</tbody>


	</table>

	<? } ?>

	</div>


</div>


<?include "footer.php";?>

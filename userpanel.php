<?php include "top.php";

if ( $_SESSION['id']!=="950850450V") {
  
  header("Location:login.php");
}



?>

<div class="container-fluid" id="adminwrap">
	<div id="buttonlink">
			<div id="b1">
			<a  href="register.php"><button  type="button" class="btn btn-primary btn-circle btn-lg" >A</button>
				<p>Add New User</p>
			</a>
		</div>
		</div>
		

<div class="col-sm" >
		
		<?php 
		
		$selectRequest="SELECT*FROM ApprovedRegistration ";
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
							    <h5 class="card-title">Full Name:<?php echo $rowresults['FullName'] ?></h5>
							  <h5 class="card-title">Occupation:<?php echo $rowresults['JobTitle'] ?></h5>
							  <h5 class="card-title">NIC:<?php echo $rowresults['NIC'] ?></h5>
							  <h5 class="card-title">Post ID/Employee ID:<?php echo $rowresults['EmployeeId'] ?></h5>
							  <h5 class="card-title">Email:<?php echo $rowresults['Email'] ?></h5>
							  
							  <h5 class="card-title">Address:<?php echo $rowresults['Address'] ?></h5>
							  
							  
							  
							    
							  </div>
							</div>


							<form method="POST">
								<input type="hidden" name="NIC" value="<?php echo $registrationid;?>" >
							
							<button type="submit" class="btn btn-primary btn-sm" name="removeuser">Remover user
						</form>
							


	


							


					</td>

				
			</tr>
				


		</tbody>


	</table>
	<?php }?>	


	</div>




</div>


















<?php include "footer.php";?>

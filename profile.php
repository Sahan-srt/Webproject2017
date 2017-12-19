<?include "top.php";

if (!isset($_SESSION['id'])) {
  
  header("Location:login.php");
}



?>

<div id="midwrap" >
	
<div id="left" class="container">
	<div class="col-sm"  >
		<h5>Previously Updated news</h5>

		<?php 
			$reporter=$_SESSION['id'];
		$selectReport="SELECT*FROM ApprovedReport WHERE ReporterID='$reporter' ";
		$reportQuery=mysqli_query($connect,$selectReport);
		while ($reportresults=mysqli_fetch_array($reportQuery)) {
			
		




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


					


					</td>

				
			</tr>
		</tbody>
		<? }?>

	</table>

	</div>






</div>
<div id="right" class="container" >
	<?$mail="min";?>
						<a><img src="images/icons/<? echo $mail;?>.png" style="margin-left:40%; margin-top:15px; margin-bottom: 10px;  "></a>
							<div  id="ppcard" class="card" style="width: 20rem;">
					  <img id="pp" class="card-img-top" src="images/profile/<?echo $_SESSION['id'];?>" alt="Card image cap">



					 	

					  <div class="card-body">
					    <h4 class="card-title"><?echo $_SESSION['name'];?></h4>
					    <p class="card-text">some stuff</p>
					    <a href="editprofile.php"><button class="btn btn-primary">Edit Bio</button></a>
					 
					  </div>

					  
					 
						</div>
						 <a href="submitPost.php">Submit post</a>



</div>




</div>









<?include "footer.php";?>
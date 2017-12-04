<?include "top.php";


?>
<body>

<div id="homewrap" >
	<div id="search" >
	
			  <form class="navbar-form" role="search">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>



</div>

	<div   id="postcard">


	
		<div id="table "  >

		<?php 
		
		$selectReport="SELECT*FROM ApprovedReport ORDER BY RID DESC";
		
		


		$reportQuery=mysqli_query($connect,$selectReport);
		while ($createarray=mysqli_fetch_array($reportQuery)) {
		$RID=$createarray['ReporterID'];
		$reportid=$createarray['RID'];

			$selectRepotername="SELECT FullName FROM ApprovedRegistration WHERE NIC='$RID' ";
		$dbrepotername=mysqli_query($connect,$selectRepotername);
		while($arrayquery=mysqli_fetch_array($dbrepotername)){

		$name=$arrayquery['FullName'];

		

		}


		 ?>



	<table class="table table-secondary"  >

		<tbody >
				<tr>
				

					<td>
							<div class="card">
							 <div class="card-header">
							    <?echo $createarray['Topic'];?>
							  </div><div id="body1">

							  <div id="cardmiddle" class="card-body">
							    <h5 class="card-title">Reported by:<?echo $name; ?></h5>
							  <h5 class="card-title">Type:<?echo $createarray['Type']; ?></h5>
							  <label>Threat level:</label>
							  	<form method="POST">
							  <?

							  if (isset($_POST['adminedit']) and $_POST['RID']==$reportid) {



								echo '<label>Edit Threat level</label>
								<select name="rating" >
								<option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>


							</select>';

									}



							  switch ($createarray['Rating']) {
							  	case '1':
							  		echo "<img class='star color' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>";

							  		break;
							  	case '2':
							  			echo "<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>";
							  			break;	
							  	case '3':
							  	        echo "<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>";
							  	        break;
							  	case '4':
							  			echo "<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>
							  		<img class='star' src='images/icons/rate.png'>";
							  			break;	
							  	case '5':
							  		echo "<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>
							  		<img class='star color' src='images/icons/rate.png'>";
							  		break;

							  	
							  	default:
							  		echo "not set";
							  		break;
							  }




							  ?>


							  <p><h4>Description:</h4>

							  	<?echo $createarray['Description']; ?>

							  </p>
							  <h5>Location:<?echo $createarray['Location']; ?></h5></div>

							  <div id="frame">
							  <iframe width="70%" src="https://www.google.com/maps/embed/v1/place?q=<?echo $createarray['Location']; ?>
						      &zoom=15
						      &key= AIzaSyDiBdV4rnRhdnlRUxfEK49A-KZDQL8swyQ ">
						  </iframe></div>
													  
							  
							    
							  </div>
							</div>


						
								<input type="hidden" name='RID' value="<?echo $reportid;?>">
							<?
							if (isset($_SESSION['id']) and$_SESSION['name']=="W.M.S.R.Thathsara") {
								 
								echo ' <button type="submit" class="btn btn-primary btn-sm" name="homepostdelete">Delete';
								echo '<button type="submit" name="adminedit" class="btn btn-primary btn-sm">Edit';

								echo '<button type="submit" name="done" class="btn btn-primary btn-sm">Update';


							}




							?>
							
							</form>



					</td>

				
			</tr>
		</tbody>


	</table>

	<? } ?>
	</div>

	</div>



</div>


<?include "footer.php";?>

<?include "top.php";


?>
<body>

<div id="homewrap" class="row .col-md-* .container-fluid"  >
	

	<div   id="postcard" class=".col-md-6 .container-fluid" >
		
	
		<div id="table"  >

		<?php 
		
		$selectReport="SELECT*FROM ApprovedReport ORDER BY RID DESC ";
		
		


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


	<div id="search" class="col-sm-4 row" >

		<div  class="col-md-12">


					<form >
   

     <div class="col-md-12" >
     	<label for="inputType"></label>
							<select name="ptype" >
								<option >Disaster Type</option>
								<option value="Fire">Fire</option>
								<option value="Floods">Floods</option>
								<option value="Vehicle_Accident">Vehicle Accident</option>
								<option value="Earthquark">Earthquark</option>
								<option value="Gas_leak">Gas leak</option>
								


							</select>



     </div> 
      <div id="custom-search-input col-md-12  " style="padding-bottom:40px; ">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Search Area" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>                  
  </form>




										<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
					    

					 <canvas id="myChart" style="background-color:#ECEFF1; padding-top:10%; "></canvas>
					 <?
					$fire="SELECT Type FROM ApprovedReport WHERE Type='Fire' ";
					$fireQuery=mysqli_query($connect,$fire);


					$flood="SELECT Type FROM ApprovedReport WHERE Type='Floods' ";
					$floodQuery=mysqli_query($connect,$flood);

					$vaccident="SELECT Type FROM ApprovedReport WHERE Type='Vehicle_Accident' ";
					$accidentQuery=mysqli_query($connect,$vaccident);

					$gasleak="SELECT Type FROM ApprovedReport WHERE Type='Gas_leak' ";
					$gasleakQuery=mysqli_query($connect,$gasleak);

					$earthquark="SELECT Type FROM ApprovedReport WHERE Type='Earthquark' ";
					$earthquarkQuery=mysqli_query($connect,$earthquark);

					$other="SELECT Type FROM ApprovedReport WHERE Type='Other' ";
					$otherQuery=mysqli_query($connect,$other);

				
							
					 ?>
					<script>
					var ctx = document.getElementById("myChart").getContext('2d');
					var fire='<?php echo $count=mysqli_num_rows($fireQuery); ?>';
					var flood='<?php echo $count=mysqli_num_rows($floodQuery); ?>';
					var vaccident='<?php echo $count=mysqli_num_rows($accidentQuery); ?>';
					var gasleak='<?php echo $count=mysqli_num_rows($gasleakQuery); ?>';
					var earthquark='<?php echo $count=mysqli_num_rows($earthquarkQuery); ?>';
					var other='<?php echo $count=mysqli_num_rows($otherQuery); ?>';
					console.log(gasleak);

					var myChart = new Chart(ctx, {
					    type: 'bar',
					    data: {
					        labels: ["Fire","Flooding","Vehicle","Gas leak","E.quark","Other"],
					        datasets: [{
					            label: 'Number of Inci',
					            data: [fire,flood,vaccident,gasleak,earthquark,other],
					            backgroundColor: [
					                'rgba(255, 99, 132, 0.2)',
					                'rgba(54, 162, 235, 0.2)',
					                'rgba(255, 206, 86, 0.2)',
					                'rgba(75, 192, 192, 0.2)',
					                'rgba(153, 102, 255, 0.2)',
					                'rgba(255, 159, 64, 0.2)'
					            ],
					            borderColor: [
					                'rgba(255,99,132,1)',
					                'rgba(54, 162, 235, 1)',
					                'rgba(255, 206, 86, 1)',
					                'rgba(75, 192, 192, 1)',
					                'rgba(153, 102, 255, 1)',
					                'rgba(255, 159, 64, 1)'
					            ],
					            borderWidth: 1
					        }]
					    },
					    options: {
					        scales: {
					            yAxes: [{
					                ticks: {
					                    beginAtZero:true,
					                    stepSize:1


					                }
					            }]				        }
					    }
					});
					</script>




</div>

	
			  

</div>




</div>


<?include "footer.php";?>

<?include "top.php";

if (!isset($_SESSION['id'])) {
  
  header("Location:login.php");
}



?>




<div class="middle" id="sub,itpost">
	

<table class="table table-secondary" >

			<form method="POST"> <tbody >
				<tr>
				

					<td>
							<div class="card">
							 <div class="card-header">
							   <label for="inputTopic">Headline</label>
							    <input type="text" class="form-control" id="inputHeadline" name="pheadline" placeholder="Enter Headline">
							  </div>

							  </div>
							  <div class="card-body">
							    
							    <div class="form-group">
							    <label for="inputAddress">Reported by:</label>
							    <input type="text" class="form-control" id="inputID" name="preporter" placeholder="Enter your NIC">
							  </div>

							<label for="inputType">Type</label>
							<select name="ptype" >
								<option >Disaster Type</option>
								<option value="Fire">Fire</option>
								<option value="Floods">Floods</option>
								<option value="Vehicle_Accident">Vehicle Accident</option>
								<option value="Earthquark">Earthquark</option>
								<option value="Gas_leak">Gas leak</option>
								<option value="Other">other</option>


							</select>
							    
							  </div>


							 <label for="inputDescription">Description</label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pdescription"></textarea>
							  </div>


							  

							  </p>
							  <h5>Location:</h5>

							   <input id="inputsearch" class="controls" type="text" placeholder="Select the location here:" name="plocation">

							<script type="text/javascript">
								
								function placesearch(){


									var input=document.getElementById('inputsearch');
									var completeauto=new google.maps.places.Autocomplete(input);

									}


							</script>
							    
							  </div>
							</div>


						
							<button type="submit" name="sendreport" class="btn btn-primary btn-sm">Send report</button><span><? echo $filldetails;?></span><span><? echo $sentdetails;?></span>
							


					</td>


				
			</tr>
		</tbody>


	</table></form>







</div>



















 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBylzrdmPVU8tXBchM3DYhuw6RwUNaSyG8&libraries=places&callback=placesearch"></script>










<?include "footer.php";?>
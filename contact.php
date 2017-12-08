<?include "top.php";


?>

<div id="middiv" class="row .col-md-* .container-fluid"  >


<table class="table table-secondary" >

			<form method="POST"> <tbody >
				<tr>
				

					<td>
							<div class="card">
							 <div class="card-header">
							   <label for="inputTopic">Name</label>
							    <input type="text" class="form-control" id="inputHeadline" name="cheadline" placeholder="Enter Your Name">
							  </div>

							  </div>
							  <div class="card-body">
							    
							    <div class="form-group">
							    <label for="inputAddress">Reported by:</label>
							    <input type="text" class="form-control" id="inputID" name="preporter" placeholder="Enter your NIC">
							  </div>

							
							    
							  </div>


							 <label for="inputDescription">Description</label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pdescription"></textarea>



						
							<button type="send" name="contact" class="btn btn-primary btn-sm">Send</button><span><? echo $error; ?></span><span><? ?></span>
							


					</td>


				
			</tr>
		</tbody>


	</table></form>









</div>






<?include "footer.php";?>
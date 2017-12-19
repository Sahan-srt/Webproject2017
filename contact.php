<?include "top.php";


?>

<div id="middiv" class="row .col-md-* .container-fluid"  >


<table class="table table-secondary" style="max-width:500px;margin-left:10%;margin-top:20px;    " >

			<form method="POST"> <tbody >
				<tr>
				

					<td>
							<div class="card">
							 <div class="card-header">
							   <label for="inputTopic">Name</label>
							    <input type="text" class="form-control" id="inputHeadline" name="cname" placeholder="Enter Your Name">
							  </div>

							  </div>
							  <div class="card-body">
							    
							    <div class="form-group">
							    <label for="inputAddress">Reported by:</label>
							    <input type="text" class="form-control" id="inputID" name="cNIC" placeholder="Enter your NIC">
							  </div>

							
							    
							  </div>


							 <label for="inputDescription">Message</label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="cmsg"></textarea>



						
							<button type="submit" name="contact" class="btn btn-primary btn-sm">Send</button><span><? echo$contacterror; ?></span><span><? ?></span>
							


					</td>


				
			</tr>
		</tbody>


	</table></form>









</div>






<?include "footer.php";?>
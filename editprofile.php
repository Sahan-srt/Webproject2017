<?include "top.php";

if (!isset($_SESSION['id'])) {
  
  header("Location:login.php");
}



?>


<div  class="container" >
						
							<form method="POST" enctype="multipart/form-data"><div  id="ppcard" class="card" style="width: 20rem;">
					  <img id="pp" class="card-img-top" src="images/profile/<?echo $_SESSION['id'];?>" alt="Card image cap"> <input type="file" name="select">
					    <button name="upload" class="btn btn-primary" type="submit">Upload a photo</button>


					 	

					  <div class="card-body">
					    
					  
					    

					  <h4 class="card-title"><?echo $_SESSION['name'];?></h4><input type="text" name="name" placeholder="change name"><br>

					  <input type="text" name="address" placeholder="change address"><br>
					  <input type="text" name="phone" placeholder="change Telephone">
					  <button type="submit" name="updatebio">Make changes</button> 	

					   
					  </div>

					  </form>
					 
						</div>
						



</div>













<?include "footer.php";?>
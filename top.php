 <?php

include "database.php";


   ?>


<!DOCTYPE html>
<html>
<head>
	<title> Disaster Awareness   </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
	
	

</head>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

	  <a class="navbar-brand" href="#">DISASTER AWAREESS 2017</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navitop" aria-controls="navitop" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navitop">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link disabled" href="map.php">Map View</a>

      </li>
    

     <li class="nav-item">
       <div class="btn-group">
  <button type="button" class="btn btn-danger"><? 

  if(isset($_SESSION['id'])) {
    echo $_SESSION['id'];
  }else{

    echo "Login please";
  }


          ?>
    


  </button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu"> <? 
  //button status change here

  if(isset($_SESSION['id'])){ 


    if ($_SESSION['id']=="W.M.S.R.Thathsara") {
   echo "<a id='admin' class='dropdown-item' href='Admin.php'>Admin Panel</a>";
    }else{

 echo "<a class='dropdown-item' href='profile.php'>Profile</a>";

    }

    
   
    echo "  <div class='dropdown-divider'></div>
    <a class='dropdown-item' href='logout.php'>LOG OUT</a>";

}else{

echo "<a id='login' class='dropdown-item' href='login.php'>Login</a>";
echo "<a id='regi' class='dropdown-item' href='register.php'>Register</a>";


} 


?>
    
    
  
  </div>
</div>

      </li>
      
    </ul>
   
  </div>
</nav>




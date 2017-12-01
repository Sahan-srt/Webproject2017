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
    

     
      <? 

  if(isset($_SESSION['id'])) {

    if ($_SESSION['id']=="W.M.S.R.Thathsara") {
      
      echo "<a href='Admin.php'>".$_SESSION['id']."</a>";

    }else{

      echo "<a href='profile.php'>".$_SESSION['id']."</a>";


    }
     
     echo "<a href='logout.php'>"."logout"."</a>";





  }else{

echo "<a href='login.php'>"."Login"."</a>";

echo "<a href='register.php'>"."register"."</a>";


  }


          ?>
    



    
    
  
 


      </li>
      
    </ul>
   
  </div>
</nav>




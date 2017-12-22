 <?php
include "connect.php";
include "database.php";


   ?>


<!DOCTYPE html>
<html>
<head>
	<title> Disaster Awareness   </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
	
	

</head>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navigation">
  <img id="logo" src="images/icons/weblogo.png">
	  <a class="navbar-brand" href="Home.php">DISASTER AWAREESS 2017</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navitop" aria-controls="navitop" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navitop">
    
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     
      <li class="nav-item active spacelistitm" >
        <a  id="navtext" class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item spacelistitm">
        <a id="navtext" class="nav-link " href="map.php">Map View</a>

      </li>


      <li class="nav-item disabled spacelistitm">
        <div class="dropdown show ">

  <a  id="navtext" class="nav-link " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Information
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="opacity:0.8;
  background-color:#421F00; 

  
  ">
    <a  class="dropdown-item ditem" href="infor.php#Fire">Fire</a>
    <a class="dropdown-item ditem" href="infor.php#Floods">Floods</a>
    <a class="dropdown-item ditem" href="infor.php#Earthquark">Earthquark</a>
    <a class="dropdown-item ditem" href="infor.php#Vehicle_Accidents">Vehicle_Accidents</a>
    <a class="dropdown-item ditem" href="infor.php#Gas_leak">Gas_leak</a>
    <a class="dropdown-item ditem" href="infor.php#Other">Other</a>
  </div>
</div>
</li>
        
      
      <li class="nav-item  spacelistitm">
        <a id="navtext" class="nav-link " href="contact.php">Contact us <span class="sr-only">(current)</span></a>
      </li>
    
</ul>
       
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="rightlist">
       
      <?php

  if(isset($_SESSION['name'])) {

    if ($_SESSION['name']=="W.M.S.R.Thathsara") {
      
    
      echo' <li class="nav-item spacelistitm">


        <a  id="navtext" class="nav-link " href="Admin.php">'.$_SESSION['name'].'</a>

      </li>';

    }else{

   echo' <li class="nav-item "><a id="navtext" class="nav-link " href="profile.php">
        <img id="navpp" class="card-img-top" src="images/profile/'. $_SESSION['id'].'"'.'>

         </a>


      </li>';

        echo' <li class="nav-item spacelistitm">
        

        <a id="navtext" class="nav-link " href="profile.php">'.$_SESSION['name'].'</a>

      </li>';

    }
     
    
  echo' <li class="nav-item spacelistitm" id="logout">
        <a id="navtext" class="nav-link " href="logout.php">'.'logout'.'</a>

      </li>';




  }else{


      echo' <li class="nav-item spacelistitm">
        <a id="navtext" class="nav-link " href="login.php">'."Login".'</a>

      </li>';

    echo' <li class="nav-item spacelistitm">
        <a id="navtext" class="nav-link " href="register.php">'."Register".'</a>

      </li>';

  }


          ?>
    


    
    
  
 


      
      
    </ul>
   
  </div>
</nav>




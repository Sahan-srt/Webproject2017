 		<?php include "top.php";


    ?>
 		<div class="middle" id="sub,itpost">

<div class="inputform">

 			<form method="POST">

 				
  <div class="form-group">
  
     <input type="text" class="form-control"   placeholder="Full Name" name="fullname">
    
  </div><span><?php echo $error_name ?></span>

  <div class="form-group">
  
    <input type="UserName" class="form-control"   placeholder="Enter username" name="registerusername">
    
  </div><span><?php echo $error_username ?></span>
  <div class="form-group">
  
    <input type="password" class="form-control"  placeholder="Password" name="registerpassword">
  </div>

  <div class="form-group">
  
    <input type="password" class="form-control"  placeholder="Re-Enter Password" name="Checkregisterpassword">
  </div><span><?php echo $error_password ?></span>

  <div class="form-group">
  
     <input type="email" class="form-control"   placeholder="email" name="email">
    
  </div><span><?php echo $error_email ?></span>

   <div class="form-group">
  
     <input type="text" class="form-control"   placeholder="NIC" name="NIC">
    
  </div><span><?php echo $error_NIC ?></span>
    <div class="form-group">
  
     <input type="job" class="form-control"   placeholder="Job Title" name="jobtitle">
    
  </div><span><?php echo $error_job ?></span>
     

  <div class="form-group">
  
     <input type="text" class="form-control"   placeholder="Address" name="address">
    
  </div><br>
     

  <button type="submit" name="register" class="btn btn-primary">Signup</button><span><?php echo $success;echo $goback; ?></span>
 
</form>







</div></div>




<?php include "footer.php";?>
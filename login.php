 		<?include "top.php";?>
 		<div class="middle" id="sub,itpost">
<div class="inputform">
 			<form method="POST">
  <div class="form-group">
  
    <input type="text" name="loginusername" class="form-control"   placeholder="Enter username">
    
  </div>
  <div class="form-group">
  
    <input type="password" name="loginpassword" class="form-control"  placeholder="Password">
  </div>
 
    

  <button type="submit" name="login" class="btn btn-primary">Login</button><span><?echo $lerror;?></span><br> or<br>
 <a href="register.php">Register</a>
</form>







</div></div>




<?include "footer.php";?>
<?php 
session_start();


include("INCLUDE/CONFIGS.PHP");



?>




<!DOCTYPE html>
<html>
<title>St.James Parish</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

body {
	
	
	background: url("https://www.monasteryicons.com/images/popup/st-james-the-greater-icon-743.jpg") no-repeat center fixed; 
  
  background-color:#ebc482; 
  padding: 200px 200px;
  
}

</style>
<body>


   
   
<div class="w3-container"  align="center"> 
  			<h1>St.James Parish Karachi</h1>
            <h1>Login Pennal</h1>
  
  

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Login</button>
  
  

  <div id="id01" class="w3-modal" style="padding-top:200px">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        
      </div>  

      <form class="w3-container"  method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="uname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        
      </div>

    </div>
  </div>
</div>
          
           <?php

  $error="sr-only";
  
  if($_SERVER['REQUEST_METHOD']=="POST"){
	  $con = new MySQLi(HOST,USER,PASS,DB);
	  if(!$con->connect_error){
		  
		  $name=$_REQUEST['uname'];
		  $pass=$_REQUEST['psw'];
		  
		  $sql="select * from user where UNAME='$name' and UPASS='$pass';";
		  $data=$con->query($sql);
		  if($data->num_rows>0){
			  while($row=$data->fetch_assoc()){
				  $_SESSION["uname"]=$row["UNAME"];
				  $_SESSION["id"]=$row["UID"];
			
				# header("location: 'mainpage.php'");
				  ?>
                 <script>
                  window.location='LOGIN/P1.PHP';
                  </script> 
                  
                  <?php
				
				  }
			  } else{ echo $error="";}
		  }	
  }
  
  ?>

    
 
  

          
          
</body>
</html>

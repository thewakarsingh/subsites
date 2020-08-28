

<?php
$wrong_password_error="";
$not_registered_user_error="";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="icon" type="images/png" href="images/icon.png"/>
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <titleAdminPanel</title></head>
<body bgcolor="#ffffff">


<center>  
 
<div id="login_form" class="container-fluid" style="border:solid;border-radius:4px;"> 
 
 <div class="alert alert-info">
    <strong>Login! </strong>Enter your registerd email id and password to login.
  </div>
                         
						  
						  <form method="post" action="login.php">
                          
                          <div class="input-group">
                              
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input type="email" class="form-control input" id="userid"  name="email"  placeholder="username"  required>
                          </div>
                          
                          
                         <span style="color:red;"> <?php
                                                         echo $not_registered_user_error;
                                                         ?> 
                             </span>
                         <br> 
                         
                         
                        <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>          
                         <input Type="password" id="password" class="form-control input" name="password" required placeholder="password">
                         
                         </div>
                         <span style="color:red;"> <?php 
                                                                 echo $wrong_password_error;
                                                         ?>
                         </span><br>

        
                         <input type="submit" class="btn btn-lg btn-success" value="Login" style="align:center;cursor:pointer;">
   </form>
 </div>

</center>
</body>
</html>
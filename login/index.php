<?php
$wrong_password_error="";
$not_registered_user_error="";
?>
<!doctype HTML>
<html>
<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
span.iconn{background-color: white;border-right-color: white;};
input.textfield{border-left-color:white;};
</style>

    <script src="../js/ajax_functions.js"></script>


<title>
internet
</title>
</head>
<body bgcolor="#ffffff" id="hell">

  <div class="col-lg-6 col-sm-12" >
    
        <div class="panel custompanel" style="border-radius:10px;border:solid 1px;border-color:#999999; margin-top:10%;">
           <div class="panel-heading" style="align-content: center; background-color:orange;border-radius:6px; color:white; font-size:20px;" >Welcome to login pannel <a style="font-size:30px;margin-left:400px;" href="#close_popup">X</a></div>
           <center>
       <div class="panel-body">
            <ul class="nav nav-tabs" data-tabs="tabs">
      <li class="active col-sm-6"><a href="#login" data-toggle="tab"><span style="font-size:14px;">Login</span></a></li>
      <li class="col-sm-6"><a href="#signup" data-toggle="tab"><span style="font-size:14px;">Signup</span></a></li>
      
        </ul>

  <div class="tab-content">
     <br>
      <div class="tab-pane active" id="login">
      
        <div class="alert alert-info">
          <strong>Login! </strong>Enter your registerd email id and password to login.
         </div>

        <form method="post" action="login.php">
              
             <div class="row input-group">
                   <span class="iconn input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input type="email" id="userid" name="email"class="textfield form-control input-md" placeholder="username" required>
              </div>                          
              
             <span style="color:red;"> 
              <?php
               echo $not_registered_user_error;
              ?> 
              </span>
             <br> 
             <div class="input-group">
                  <span class="iconn input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>          
             <input Type="password" id="password" class="textfield form-control input" name="password" required placeholder="password">
             
             </div>
             <span style="color:red;">
              <?php 
                echo $wrong_password_error;
              ?>
             </span><br>
                <input type="submit" class="btn btn-lg btn-success" value="Login" style="align:center;cursor:pointer;">
        </form>
   </div>

  <div class="tab-pane" id="signup">

      <div class="alert alert-info">
        <strong>Signup! </strong>Provide follwing details to signup.
      </div>
      <form action="signup.php" method="POST">
        <div class="row input-group">
                   <span class="iconn input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input type="text" class="textfield form-control" id="fullname" name="name" required placeholder="full name">
              </div><br>
        <div class="row input-group">
                   <span class="iconn input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input type="text" class="textfield form-control" id="emailid" name="email" required placeholder="email id"><br>
        </div><br>

        <div class="row input-group">
                   <span class="iconn input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                   <input type="password" class="textfield  form-control" id="password" name="password" required placeholder="password"><br>
        </div>
              <br>
          <div id="signuperror"></div>
        <button class="btn btn-lg btn-success" onclick="signupa()" value="signup" style="align:center">  sigup</button> 
       
       </form>
                   
    </div>        
  </div>

</div>
</div>
</center>
</body>
</html>








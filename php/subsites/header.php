<?php
require_once 'php/session-tracking.php';
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" type="images/png" href="images/logo1.png"/>
<script src="js/functions.js"></script>
<script src="js/ajax_functions.js"></script>
<script src="js/jquery.js"></script>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <script src="bootstrap/js/jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="login/login.css">

<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/internet.css"> 
<link rel="stylesheet" href="css/general.css">  
 

<title>subsites</title></head>
<body>

<?php
include 'php/functions.php';

if(isset($_SESSION['Email'])){

include "sidebar.php";

}


?>

<div id="login_popup">
	<?php
	include "login/login_popup.php";

	include "php/server_login.php";
	?>

</div>

<div id="foreground"></div>


	<!--heading of header-->



<div class="container-fluid" id="top_row" style="background-color: #876543;">
	<div class="row" style="background-color: #456;">
		<div class="col col-xs-6 col-sm-2">
			<a  href="index.php">
				<img src="images/logo.png" class="site-logo">
			</a>
		</div>

		<div class="col col-xs-3 col-sm-2">
			<div id="drop-btn">
			<i class="glyphicon glyphicon-th-list" style="font-size: 25px;color:white; padding: 3px;"></i>
				<font class="hidden-xs hidden-sm" style="font-size: 20px; color: white;">category</font>
			</div>

		</div>
		
		<div class="col col-xs-1 col-sm-6">
			<div class="container-fluid hidden-xs">
				<div class="row">
					
					<div class="col-xs-12">

						<form action="search.php" method="GET">
							<div class="inner-addon left-addon">
								<i class="glyphicon glyphicon-search" style="font-size: 20px; color:orange;"></i>
								<input id="searchfield" type="text" onkeyup="searchsuggestion(this.value)" name="q" style="border-bottom: solid 3px orange; " class="input-lg form-control" placeholder="search in the website..">
								
							</div>
							<input type="submit" style="display: none;">
						</form>
					</div>
	
				</div>
			</div>

			<div id="srch-btn">
			
				<i onclick="clearsearch()" class="glyphicon glyphicon-search hidden-sm"></i>
			</div>
			
		</div>				
						
		

		<div class="col col-xs-2 col-sm-2">
						<?php
						   
				if(!isset($_SESSION['Email'])){
							
							echo '<button class="btn btn-link" style="margin-top:2px; text-decoration:none; color:#14; font-size:16px;" onclick="openlogin()">login</button>';
						}
							else{
								?>
			<div id="main">
			  <span style="float:right;font-size:24px; color:#fff;margin-right:14%;cursor:pointer;" id="options">☰</span>
			</div>

			
<?php
   	}
   	
	?>
		</div>
	</div>
</div>

<div class="container-fluid" id="searchbar">

	<div class="row" >
		<div class="col-xs-1 icon" style="color: blue;" id="close-searchbar">↑


		</div>

		<div class="col-xs-9">
			<form action="search.php" method="GET">
				
					
					<input id="searchfield" suggestion="false" onkeypress="searchsuggestion()" type="text" name="q" placeholder="search in the website" class="searchfield" >
					<div  class="searchbar"></div>

				<input type="submit" style="display: none;">
			</form>
		</div>
		<div class="col-xs-1 icon" style="color:red;"><span onclick="clearsearch()">X</span>
		</div>
	</div>
</div>
<div id="dropdownbackground">
</div>

<div class="dropdown">
	
	<div id="myDropdown" class="dropdown-content">	
		<div class="container-fluid">
			<div class="row">
		
				<?php 
				$conn=server_login();
				$sql="SELECT DISTINCT category FROM sites ORDER BY category";

				$result=mysqli_query($conn,$sql);
				$c=" ";
				while($var=mysqli_fetch_array($result)){
					$d=$var['category'];
					$d=$d[0];
					$d=strtoupper($d);
				$x=strcmp($d, $c);
				
					
					if($x){
						echo "</div><div class=\"row\">&nbsp;&nbsp;&nbsp;<h3>$d[0]</h3>";

						$c=$d[0];


					}

					?>


					<h5>
					<a href="category.php?category=<?php echo $var['category']; ?>"><?php echo $var['category'];?></a>
				</h5>
					<?php



				}

			echo "</div>";

				?>
			</div>
		</div>
	</div>
</div>
<div id="searchsugg" style="height: content 100px;
     width: 650px;margin-left: 36%; font-size: 20px;
     background-color: #aaa; position:fixed;top:40px;
     z-index:900;"> </div>



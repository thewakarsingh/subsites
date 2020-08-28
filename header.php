<?php
require_once 'php/session-tracking.php';
?>

<!DOCTYPE html>
<html lang="en-US">
<html>
<head>
 <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="google-signin-scope" content="profile email">
  
    <meta name="google-signin-client_id" content="49560996963-15b068i5qbr2tdogk4ko1rr1570p9r2h.apps.googleusercontent.com">

<script src="https://apis.google.com/js/platform.js" async defer>


</script>





<meta name="google-signin-client_id" content="49560996963-15b068i5qbr2tdogk4ko1rr1570p9r2h.apps.googleusercontent.com">

  <meta property="og:title" content="<?php echo $ogtitle; ?> " />
<meta property="og:description" content="<?php echo $ogdescr; ?> " />

<meta name="description" content="<?php echo $ogdescr; ?> " />
<link rel="canonical" href="<?php echo $url; ?> " />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $ogtitle; ?> " />
<meta property="og:description" content="<?php echo $ogdescr; ?> " />
<meta property="og:url" content="<?php echo $ogurl; ?> " />
<meta property="og:site_name" content="<?php echo $ogsitename; ?> " />

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script async defer src="https://connect.facebook.net/es_LA/sdk.js"></script> 


<link rel="icon" type="images/png" href="images/logo1.png"/>
<script src="js/functions.js"></script>
<script src="js/ajax_functions.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>


  <script src="js/jquery.js"></script>

  <link rel="stylesheet" href="login/login.css">

<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/internet.css"> 
<link rel="stylesheet" href="css/general.css">  
 

<title><?php echo $title; ?></title></head>
<body>
<div id="sidenavbackground"></div>
  
<?php
include 'php/functions.php';
include "php/server_login.php";

if(isset($_SESSION['Email'])){

include "sidebar.php";

}
else{

?>

<div id="login_popup">
	<?php
	include "login/login_popup.php";
	?>
</div>
<?php
}
?>
<div class="row">
<div style="overflow-y: auto;" id="searchsugg" > </div>
</div>

<div id="foreground"></div>



	<!--heading of header-->



<div class="container-fluid"  id="top_row">
	<div class="row" i>
		<div class="col col-xs-5 col-sm-2">
			<a  href="index.php">
				<img src="images/logo.png" class="site-logo">
			</a>
		</div>

		<div class="col col-xs-2 col-sm-2">
			<div id="drop-btn">
			<i class="glyphicon glyphicon-th-list" style="font-size: 25px;color:white; padding: 3px;"></i>
				<span class="hidden-xs hidden-sm" style="font-size: 20px; color: white;">category</span>
			</div>

		</div>
		
		<div class="col col-xs-2 col-sm-6">

			<div class="container-fluid hidden-xs">

				<div class="row">

					<div class="col-xs-12">

						<form action="search.php" autocomplete="off" method="GET">
							<div class="inner-addon left-addon">
								<i class="glyphicon glyphicon-search" style="font-size: 20px; color:orange;"></i>
								<input id="searchfield" type="search" suggestion="false" onkeyup="searchsuggestion(this.value)" name="q" autocomplete="false" style="border-bottom: solid 3px orange; " class="input-lg form-control" placeholder="search in the website..">

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
						
		

		<div class="col col-xs-2 col-sm-1">
						<?php
						   
				if(!isset($_SESSION['Email'])){
				
					echo '<a onclick="openlogin()" style="font-size:20px; margin-left:-10px; margin:auto;text-decoration:none; cursor:pointer;">login</a>';
							
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
		<div class="col-xs-1 icon" style="color: blue;cursor:pointer;" id="close-searchbar">↑


		</div>

		<div class="col-xs-9">

			<form action="search.php" method="GET">
				
					
					<input id="searchfieldm" suggestion="false" onkeyup="searchsuggestion(this.value)" name="q" type="text"  placeholder="search in the website" class="searchfield" >

				<input type="submit" style="display: none;">
			</form>

		</div>
		<div class="col-xs-1 icon" style="color:red;cursor:pointer;"><span onclick="clearsearch()">X</span>
		</div>
	</div>
</div>
<div id="dropdownbackground"></div>


<div class="dropdown">
	
	<div id="myDropdown" class="dropdown-content">	
		<div class="container-fluid">
			<div class="row">
		
				<?php 
				$conn=server_login();
				$sql="SELECT DISTINCT category FROM category ORDER BY category";

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

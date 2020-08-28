<?php

$category=$_GET['category'];

include "header.php";

include "php/php_functions.php";

$conn=server_login();

$sql="SELECT name,domain_name,rating,logo_src FROM sites WHERE category='$category'";
	
	$retval=mysqli_query($conn,$sql);

	if(!$retval)
		die('Could not get data:' . mysql_error());

$counter=0;
		echo "<span> &nbsp;&nbsp;$value</span>";
	
	while($var = mysqli_fetch_array($retval)){
		
		if($counter%4==0){
			echo "<div class=\"row site-row\">";
						 }
		
		$counter++;

		?>
		
		<div class="col-sm-3 site-info">
			<div>
				<img class="logo" src="<?php echo $var['logo_src'];?>"><br>
				
		</div>
		
		
			<?php echo $var['name']; ?>
			<form action="site.php" method="GET">	
		<a target="_blank" href="http://www.<?php echo $var['domain_name']; ?>" >
		
			<?php echo $var['domain_name']; ?>
			</a><br> rating: <?php echo $var['rating']; ?>/10

			<br><input type="text" style="width:0px;height:0px;" class="invisible" name="domain_name" 
			value="<?php echo $var['domain_name']; ?>">

			<input type="submit" class="btn btn-link" value="Details"></form>




				<form action="php/add_faveroit.php" method="GET">
						<input type="text" value="<?php echo $var['domain_name']; ?>" style="visibility:hidden;" name="domain" >
						<input type="submit" value="*">
				</form>

		</div>
				
			<?php 

		if($counter%4==0){
			echo "</div><hr>";
			
		}
		
		}


?>			
<?php
include 'php/session-tracking.php';

$category=$_GET['category'];

include "header.php";

include "php/php_functions.php";

$conn=server_login();

$sql="SELECT name,domain_name,rating,logo_src FROM sites WHERE category='$category'";
	
	$retval=mysqli_query($conn,$sql);

	if(!$retval)
		die('Could not get data:' . mysql_error());

$counter=0;
		echo '<br><br><h3> &nbsp;&nbsp;'.$category.'</h3><div class="container-fluid">';
	
	while($var = mysqli_fetch_array($retval)){

		printsiteinfo($var);

}

?>
</div>


<?php

include 'footer.html';
?>	


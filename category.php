<?php
include 'php/session-tracking.php';

$category=$_GET['category'];
$ogtitle=$title="$category websites on subsites.geekvivek.com";
$ogdescr=$category;
$ogurl=$url="https://subsites.geekvivek.com/category.php?category=".$category;
$ogsitename="subsites";
include "header.php";

include "php/php_functions.php";

$conn=server_login();

$sql="SELECT name,domain_name,binglogosrc FROM site_rank WHERE category='$category' ORDER BY rank limit 40";
	
	$retval=mysqli_query($conn,$sql);

	if(!$retval)
		die('Could not get data:' . mysql_error());

$counter=0;

		echo '<br><br><h3> &nbsp;&nbsp;'.$category.'</h3><div class="container-fluid">';
	
	while($var = mysqli_fetch_array($retval)){

?>
		<script type="text/javascript">
		var arr = <?php echo json_encode($var); ?>;
		
			 printsiteinfoa(arr);	
	 
	 </script>
<?php
}

?>
</div>

<?php

include 'footer.html';
?>	




<?php
require 'php/session-tracking.php';

require "header.php";

$domain_name="";
$rating=0;
$discription="";
$msg="";

if(isset($_SESSION['Email'])){
$name=$_SESSION['Email'];
?>
<script type="text/javascript">

	show_bookmarks();
</script>

<div id="bookmarks"></div>


<?php
}
$category = array("email service","search engine", "social media", "software downloading");


	$conn=server_login();

?>
<div class="container-fluid">

<?php
foreach( $category AS $value ){



	$sql="SELECT name,domain_name,rating,logo_src FROM sites WHERE rank<5 AND category='$value'";
	
	$retval=mysqli_query($conn,$sql);

	if(!$retval)
		die('Could not get data:' . mysql_error());

$counter=0;


?>

	<br><br> 

<div class="container-fluid site-row"><h2>
	<form action="category.php" method="GET"><input type="text" readonly name="category" value="<?php echo $value; ?>" style="border:0px;"><input type="submit" class="btn btn-link" value="show all"></form></h2>
	
<div class="row ">

<?php


	
	while($var = mysqli_fetch_array($retval)){


		printsiteinfo($var);
			
		}

		?>

		 </div>
	 </div>

		 <?php


		
		}	
		mysqli_close($conn);
?>
</div>

<?php
		include "footer.html";
?>

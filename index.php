
<?php
require 'php/session-tracking.php';
$ogtitle=$title="Subsites | Largest database of all websites on internet.";
$ogdescr="subsites.geekvivek.com is a websites which provides information of millions of websites from the internet. It also provides the tutorials related to that website. You can also create account and save your bookmarks here and access your bookmarks from anywhere on the web.";
$ogurl=$url="https://subsites.geekvivek.com/";
$ogsitename="Subsites";
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

<div id="bookmrk"></div>

<?php
}
$category = array("Search Engines and Portals","Social Networking", "Shopping", "Newsgroups and Message Boards");


	$conn=server_login();

?>
<div class="container-fluid">

<?php
foreach( $category AS $value){

	$sql="SELECT name,domain_name,binglogosrc FROM site_rank WHERE category='$value' LIMIT 4";
	
	$retval=mysqli_query($conn,$sql);

	if(!$retval)
		die('Could not get data:' . mysql_error());

$counter=0;
?>
<br>
<div class="container-fluid site-row">
	<div class="row"><h4 class="col col-sm-3 col-xs-10"><?php echo $value; ?></h4><a class="col col-sm-8 col-xs-2" style="float:left;" href="category.php?category=<?php echo $value; ?>">Show all</a></div>
	
<div class="sites-info-row">

<?php


	
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
	 </div>

		 <?php


		
		}	
		mysqli_close($conn);
?>
</div>

<?php
		include "footer.html";
?>

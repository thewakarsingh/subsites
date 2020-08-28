<?php

include 'header.php';


include "../php/php_functions.php";

$conn=server_login();

$sql="SELECT DISTINCT category FROM";
	
	$retval=mysqli_query($conn,$sql);

	if(!$retval)
		die('Could not get data:' . mysql_error());
?>

<div class="container">
	<div class="row">
  <input list="category" name="category">
  <datalist id="category">
   
<?php
	
	while($var = mysqli_fetch_array($retval)){
?>

<option value="$var['category']">

<?php

	}

?>
</datalist>
  <button id="addcategory">Add</button>

</div>
</div>

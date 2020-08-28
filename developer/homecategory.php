<?php

include 'header.php';


include "../php/server_login.php";

$conn=server_login();

$sql="SELECT DISTINCT category FROM sites";
	
	$retval=mysqli_query($conn,$sql);

	if(!$retval)
		die('Could not get data:' . mysql_error());
?>

<div class="container" style="margin-top: 20px;">
	<div class="row">
  <input id="category" list="category" class="form-control form-control-sm">
  <datalist>
   
<?php
	
	while($var = mysqli_fetch_array($retval)){
		$category=$var['category'];
?>

<option value="<?php echo $category; ?>">

<?php

	}

?>
</datalist>
  <button id="addcategory" onclick="addcategory()" class="btn btn-primary">Add</button>

	</div>


	<div>
		<br>
		<div id="categorylist" style=" border:solid 1px #999; border-radius: 7px; width: 500px; height: 200px;"></div>

	</div>

<button class="btn btn-success" onclick="submitcategories()">Submit</button>
</div>



<script type="text/javascript">
	
	function addcategory(){

  		 var temp=document.getElementById('category').value;

  		 var val=document.getElementById('categorylist').innerHTML;

  		 	document.getElementById('categorylist').innerHTML=val+'<span style="max-width:100px; width:auto; overflow: hidden; border:solid 1px #555; padding:4px; margin:5px; border-radius:3px;"id="'+temp+'">'+temp+'<button class="btn btn-xs btn-danger" onclick="removecategory(this.value)" style="padding:2px; margin-bottom:2px; margin:3px;" value="'+temp+'">X</button></span>';

	}

	function removecategory(category){

var elem = document.getElementById(category);
elem.parentNode.removeChild(elem);

	}


</script>

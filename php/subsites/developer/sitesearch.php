<?php

include "header.php";

?>
<style type="text/css">
	
label{

margin-left: 0px;
float: left;

}

input{
	float: right;
}
textarea{
	float: right;
}

</style>


<div class="container-fluid" style="width: 500px; background-color: ;">

<form  action="" method="get" enctype="multipart/form-data">

	<div class="row">
		<div class="col-sm-12">
			<label>Enter name or domain name</label> <input type="text" class="form-control input-sm" name="name">
		</div>
	</div>
<br>
	<input type="submit" class="btn btn-md btn-primary"  value="search">
</form>
</div>	
<br><br>
<?php 

include '../php/server_login.php';

$conn=server_login();

$name=$_GET['name'];


$sql="SELECT * from sites where name like ('%$name%') OR domain_name like('%$name%')";

$query=mysqli_query($conn,$sql);

echo '<div class="container-fluid" style="width:80%; border:solid 1px #777;">';

?>
<div class="row" style="background-color: #777; height: 50px; color: #fff;">
		<div class="col-sm-6">Name</div>
		<div class="col-sm-5" style="float: right;">Domain Name </div>
		<div class="col-sm-1" style="float: right;">Edit</div>
	</div>


<?php


while($var=mysqli_fetch_array($query)) {
?>

<form action="editsite.php" method="get">
<div class="row">
		<div class="col-sm-4"><?php echo $var['name']; ?></div>
		<div class="col-sm-4"> <input type="text" name="domain_name"value="<?php echo $var['domain_name']; ?>" readonly style="border:0px;"></div>
		<div class="col-sm-4"> <input type="submit" value="edit" class="btn btn-link"></div>
	</div>
</form>
<hr>


<?php

}
echo "</div>";

 ?>
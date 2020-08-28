<?php

$name=$_GET['domain_name'];

include '../php/server_login.php';

$conn=server_login();

$sql="SELECT * from sites where domain_name='$name'";

$query=mysqli_query($conn,$sql);

$var=mysqli_fetch_array($query);



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
	<h4><u>Edit following information of the site</u></h4><br>

<form  action="edit.php" method="POST" enctype="multipart/form-data">

	<div class="row">
		<div class="col-sm-12">
			<label>name of the website:</label> <input type="text" value="<?php echo $var['name'];?>" class="form-control input-sm" name="name">
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
	<label>Domain name of the website:</label> <input value="<?php echo $var['domain_name'];?>" class="form-control input-md" type="text" name="domain_name" readonly>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6"><label>rating:</label></div>
		<div class="col-sm-6"><label>popularity:</label> </div>
	</div>
	<div class="row" >
		<div class="col-sm-6"><input value="<?php echo $var['rating'];?>" type="text" class="form-control input-sm" name="rating"></div>
		<div class="col-sm-6"><input value="<?php echo $var['popularity'];?>"type="text" class="form-control input-sm" name="popularity"></div>
	</div>

		<div class="row">
		<div class="col-sm-6"><label>category:</label></div>
		<div class="col-sm-6"><label>release date:</label></div>
	</div>
	<div class="row" >
		<div class="col-sm-6"><input value="<?php echo $var['category'];?>" type="text" class="form-control input-md" name="category"></div>
		<div class="col-sm-6"><input value="<?php echo $var['publish_date'];?>"type="date" class="form-control input-md" name="release"></div>
	</div>

	 
	
	 
	 
	
	<label>description:</label> <textarea text="<?php echo $var['description'];?>" class="form-control input-md" name="description"></textarea>
	<label>Enter link for logo:</label> <input value="<?php echo $var['logo_src'];?>" type="text" class="form-control input-md" name="logo">
	<input type="submit" class="btn btn-md btn-primary"  value="submit">
	</form>
</div>	

</body>
</html>

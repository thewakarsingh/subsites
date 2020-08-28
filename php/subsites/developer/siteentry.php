<?php

include "header.php";

?>

<script type="text/javascript" src="../js/ajax_functions.js"></script>

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

<script type="text/javascript">


	function showname(){

		var str=document.getElementById("url_name").value;

		var d=str.split(".");

		document.getElementById('sitename').value=d[0];
}

function getinfo(){

showname();

previewlogo();

findcategory();

finddescription();


}


</script>

<div class="container-fluid" style="width: 500px; background-color: ;">
	<h4><u>Provide following information of the site</u></h4><br>
	<button onclick="getinfo()" class="btn btn-primary">Fetch Info</button>

<form  action="developer.php" method="POST" enctype="multipart/form-data">

	<div class="row">
		<div class="col-sm-12">
			
				<label>Domain name of the website:</label> <input class="form-control input-md" type="text" name="domain_name" id="url_name" required>
				
			
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<label>name of the website:</label> <input type="text" class="form-control input-sm" name="name" id="sitename" required>
		</div>
		<div class="col-sm-6" >
			<div id="logopreview" style="width: 100px;height: 100px; border-radius: 4px; border:2px solid #222;">
				 Logo preview

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6"><label>category:</label></div>
		
	</div>
	<div class="row" >
		<div class="col-sm-6"><input type="text" class="form-control input-md" name="category" id="category"></div>
		
	</div>

		<div class="row">
		<div class="col-sm-12"><label>Logo Link:</label></div>
		
	</div>
	<div class="row" >
		<div class="col-sm-12"><input type="text" class="form-control input-md" name="logosrc" id="logosrc" ></div>
		
	</div>

	 
	
	 
	 
	
	<label>description:</label> <textarea class="form-control input-md" id="description" name="description" rows="7" "></textarea>

	<input type="submit" class="btn btn-lg btn-success"  value="submit">
	</form>
</div>	

</body>
</html>

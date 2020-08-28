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
	<h4><u>Provide following information of the site</u></h4><br>

<form  action="developer.php" method="POST" enctype="multipart/form-data">

	<div class="row">
		<div class="col-sm-12">
			<label>name name or domain name</label> <input type="text" class="form-control input-sm" name="name">
		</div>
	</div>

	<input type="submit" class="btn btn-lg btn-success"  value="submit">
</form>
</div>	

</body>
</html>

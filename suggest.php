<?php
include 'header.php';
?>
<style type="text/css">
	
.errorreport{

	text-align: center;
	color: red;
	font-size: 24px;
}

</style>
<br><br>
 <div class="container">
 	<form action="" method="POST">
 	<div class="row"> <h3>Please Provide the domain name of the website.</h3></div>
 	<div class="row"><input type="text" name="domainname" class="form-control input-sm" required></div>
 	<br>
 	<div class="row"> <input type="submit" value="submit" class="btn btn-lg btn-success">
 	</form>
</div>

<?php

	if (isset($_POST['domainname'])){


		$domainname=$_POST['domainname'];


		$conn=server_login();

		$sql="SELECT * FROM sites WHERE domain_name='$domainname'";

		$res=mysqli_query($conn,$sql);

		$num=mysqli_num_rows($res);

		if($num)
		echo "<div class=\"row errorreport\">This website is already in our database. Thanks for your suggestion.</div>";

		else{

		

			mailtoemail("ddwakar2@gmail.com","We suggest you for this website: $domainname");

			echo "<div class=\"row errorreport\">Thanks for your suggestions Your request is under process.</div>";
		}












	}

//include 'footer.html';
	

?>
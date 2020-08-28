<?php
$wrong_password_error="";
$not_registered_user_error="";

$pAssword=$_POST["password"];
$eMail=$_POST["email"];
if($eMail=="ddwakar1@gmail.com"&&$pAssword=="ddwakar")
	 header('Location:home.php');
else
	echo "wrong authentication";
?>
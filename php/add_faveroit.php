<?php

$domainname=$_GET['domain'];

session_start();

$email=$_SESSION['Email'];

if (!isset($email)) {
	echo "2";
}

else{
	include 'server_login.php';

	$conn=server_login();

	$query="SELECT bookmarks FROM user WHERE email_id='$email'";

	$result=mysqli_query($conn,$query);
	while($var=mysqli_fetch_array($result)){
	
	$q=strpos($var['bookmarks'],$domainname);
	
	//$a=mysqli_num_rows($result);

	if($q){
		$domainname=$domainname.",";
		$domainname=str_replace($domainname,"",$var['bookmarks']);
		
		$query="UPDATE user SET bookmarks='$domainname' WHERE email_id='$email'";
		if(mysqli_query($conn,$query))
		echo "0";
	}
	else{
		$domainname=$var['bookmarks'].$domainname.",";
	$query="UPDATE user SET bookmarks='$domainname' WHERE email_id='$email'";
	if(mysqli_query($conn,$query))
		echo "1";
	}
}
}

?>
<?php

$comment=$_GET['comment'];

$domain=$_GET['domain'];

session_start();

if(!isset($_SESSION['Email'])){
	echo "0";
}
else{

	$email=$_SESSION['Email'];

include 'server_login.php';

$conn=server_login();

$sql="SELECT name FROM user WHERE email_id='$email'";

$result=mysqli_query($conn,$sql);

$var=mysqli_fetch_array($result);

$name=$var['name'];

$query="INSERT INTO comments(domain_name,name,email_id,comment) VALUES ('$domain','$name','$email','$comment')";

if(mysqli_query($conn,$query)){
	
		echo "1";
}
else
	echo "0";
}

?>
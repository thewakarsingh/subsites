<?php

$comment_id=$_GET['comment_id'];
	$reply=$_GET['reply_comment'];
	$domain_name=$_GET['domain_name'];

if(isset($_SESSION['Name']))
{

	$name=$_SESSION['Name'];

	include "server_login.php";

	$conn=server_login();

	

	$sql="INSERT INTO reply(comment_id,domain_name,reply,name) VALUES($comment_id,'$domain_name','$reply','$name')";

	if(mysqli_query($conn,$sql))
		header('Location:../site.php?domain_name='.$domain_name.'');
	else
		echo "swr";
	
	
}
else{

	header('Location:../site.php?domain_name='.$domain_name.'');
	
}
?>
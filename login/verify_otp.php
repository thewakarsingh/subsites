<?php
$otpr=$_GET['tt'];
$eMail=$_GET['email'];

include "../php/server_login.php";

$conn=server_login();


if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

$sql = "SELECT otp FROM user WHERE email_id='$eMail'";

$retval=mysqli_query($conn,$sql);
	
while($var = mysqli_fetch_array($retval)){
	$otpo=$var['otp'];

	if($otpo==$otpr){

			$sql = "UPDATE user SET activated=1 WHERE email_id='$eMail'";
				$retval=mysqli_query($conn,$sql);

			$sql = "SELECT * FROM user WHERE email_id='$eMail' AND activated=1";
				$retval=mysqli_query($conn,$sql);

				while($GLOBALS = mysqli_fetch_array($retval)){


					session_start();

				$_SESSION['Name']=$GLOBALS['name'];
				$_SESSION['Email']=$GLOBALS['email_id'];
                $_SESSION['profile_image']=$GLOBALS['photo'];
                mysqli_close($conn);

			header('Location:../');


				}

	}
	else
		echo "otp missmatched";
}
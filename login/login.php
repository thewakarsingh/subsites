<?php

$pAssword=$_GET["password"];
$eMail=$_GET["email"];

//$pAssword=sha1($pAssword);

if($pAssword==""||$eMail=="")
    echo "All fields are required";
else{


include "../php/server_login.php";

$conn=server_login();


if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

$sql = "SELECT * FROM user WHERE email_id='$eMail' AND activated=1";

$retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)==0){
	echo "You are not registered with us. Please signup.";}
else{

while($GLOBALS = mysqli_fetch_array($retval)){

	if($GLOBALS['activated']==1){

			$pwd=$GLOBALS['password'];
           if(strcmp(sha1($pAssword),$pwd)){

				session_start();

				$_SESSION['Name']=$GLOBALS['name'];
				$_SESSION['Email']=$GLOBALS['email_id'];
                $_SESSION['profile_image']=$GLOBALS['photo'];
                mysqli_close($conn);
                                
				echo 1;
				break;
				}

			else{
				mysqli_close($conn);
				echo "you entered wrong password. try again!";break;
				}
			
			}
			else{

				echo "Please Signup again and activate your account.";

			}
		}
		}
    }                                      
                        
?>


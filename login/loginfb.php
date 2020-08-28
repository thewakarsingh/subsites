
<?php

$nAme=$_GET["name"];
$eMail=$_GET["email"];
$pIc=$_GET["pic"];


//$pAssword=sha1($pAssword);

include "../php/server_login.php";

$conn=server_login();


if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

$sql = "SELECT * FROM user WHERE email_id='$eMail'";
$retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)==0){

       $sql = "INSERT INTO user (name,email_id,password,otp)
        VALUES ('$nAme','$eMail','fbuse121r0',123465)";

            if (mysqli_query($conn,$sql)){
                
                		session_start();

				$_SESSION['Name']=$nAme;
				$_SESSION['Email']=$eMail;
				$_SESSION['Pic']=$pIc;

                mysqli_close($conn);
                                
				echo 1;
    
            }
    
}
else{
while($GLOBALS = mysqli_fetch_array($retval)){

				session_start();

				$_SESSION['Name']=$GLOBALS['name'];
				$_SESSION['Email']=$GLOBALS['email_id'];
				$_SESSION['Pic']=$pIc;
				$_SESSION['bookmarks']=$GLOBALS['bookmarks'];

                mysqli_close($conn);
                                
				echo 1;
				break;
				}

			
		}
?>


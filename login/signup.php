<?php
include '../php/functions.php';

$nAme=$_GET["name"];
$pAssword=$_GET["password"];
$eMail=$_GET["email"];
$otp=rand(6,23451);

if($nAme==""||$pAssword==""||$eMail=="")
    echo "All fields are required";
else{

    include "../php/server_login.php";

    $conn=server_login();

    if(!$conn){
        die("Connection failed: " . mysql_error());
    }
    else{
    	$pAssword=sha1($pAssword);
        $sql = "INSERT INTO user (name,email_id,password,otp)
        VALUES ('$nAme','$eMail','$pAssword',$otp)";
echo $sql;
            if (mysqli_query($conn,$sql)){
                $msg="<h1>SubSites New User Verification</h1><a href=\"varify.php?tt=$otp&email=$eMail\">Click here</a> to Activate your Account.";

                $p=mailtoemail($eMail,$msg);

                echo $p;
         }
            else
                    echo 'You are already a user please use login.';
        }
    mysqli_close($conn);
}
?>


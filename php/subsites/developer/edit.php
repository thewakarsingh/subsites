<?php
include "../php/server_login.php";

$nAme=$_POST["name"];
$dOmain_name=$_POST["domain_name"];
$rAting=$_POST["rating"];
$pOpularity=$_POST["popularity"];
$dEscription=$_POST["description"];
$rElease_date=$_POST["release"];
$cAtegory=$_POST["category"];
$lOgo=$_POST["logo"];
    
$msg="";

$conn=server_login();

if(!$conn){
    die("Connection failed: " . mysql_error());
}
else{
$sql = "UPDATE sites SET name='$nAme',domain_name='$dOmain_name' ,rating=$rAting ,popularity=$pOpularity ,description='$dEscription' ,category='$cAtegory' ,logo_src='$lOgo' WHERE dOmain_name='$dOmain_name'";
echo $sql;

        if (mysqli_query($conn,$sql)){
            $msg="$dOmain_name added successfully";
            
         header('Location:http:sitesearch.php');
     }
        else
                echo 'Please Enter Valid data ...Try again...';
        }
mysqli_close($conn);
?>
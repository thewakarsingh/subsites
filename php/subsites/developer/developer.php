<?php
include "../php/server_login.php";
include "../php/functions.php";

$nAme=$_POST["name"];
$dOmain_name=$_POST["domain_name"];
$dEscription=$_POST["description"];
$cAtegory=$_POST["category"];
$lOgo=$_POST["logosrc"];
  
$msg="";

$conn=server_login();

if(!$conn){
    die("Connection failed: Please contact developer....." . mysql_error());
}
else{


    $sql="SELECT domain_name FROM sites WHERE dOmain_name='$dOmain_name'";

    $res=mysqli_query($conn,$sql);

    $res=mysqli_num_rows($res);

    echo $res;

if(!$res){
$sql = "INSERT INTO sites (name,domain_name,description,category,logo_src)
VALUES ('$nAme','$dOmain_name','$dEscription','$cAtegory','$lOgo')";

        if (mysqli_query($conn,$sql)){
        		
    		$html= file_get_contents("$lOgo");

			$loc="../images/$dOmain_name.png";
			file_put_contents($loc, $html);


            $msg="$dOmain_name added successfully";
            
         header('Location:siteentry.php');}
        else
                echo 'Please Enter Valid data ...Try again...';
        }
    else
        echo "This site is already in our database. Please enter a new domain name.";
    }


mysqli_close($conn);
?>
<?php    
include 'functions.php';


$url=$_GET['src'];
$domainname=$_GET['domainname'];


$a=previewlogo($domainname,$url);

$bb=strpos($a, "Warning");

if(!$bb){
echo $a;
}
else
	echo "No logo Url found.";


?>
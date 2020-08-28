<?php    
include 'functions.php';


$url=$_GET['q'];

$a=finddescription($url);

$bb=strpos($a, "Warning");

if(!$bb){
echo $a;
}

else
	echo "No description found...";
?>
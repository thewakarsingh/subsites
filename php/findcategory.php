<?php    
include 'functions.php';


$url=$_GET['q'];

$category=findcategory($url);

$bb=strpos($category, "Warning");

if(!$bb){
echo $category;
}
else
	echo "No category Suggestion...";

?>
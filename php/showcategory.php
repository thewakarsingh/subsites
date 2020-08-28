<?php    
include 'functions.php';


$url=$_GET['q'];

$category=findcategory($url);

echo $category;

?>
<?php


$domainname=$_GET['domain'];

include 'simple_html_dom.php';

echo file_get_contents("http://$domainname");

?>
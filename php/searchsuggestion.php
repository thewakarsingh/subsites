<?php

include 'server_login.php';

$txt=$_GET['q'];

$conn=server_login();

if($txt){
	$domainname="";
$q="SELECT * FROM site_rank WHERE domain_name like ('$txt%') ORDER BY rank limit 100";

$result=mysqli_query($conn,$q);
$a="<script type=\"javascript\">document.getElementById(\"searchsugg\").style.display=\"block\";
</script>";
if(mysqli_num_rows($result)){

	while ($var=mysqli_fetch_array($result)) {
		$a=$var['domain_name'];
		$domainname.="<div class=\"col-sm-12\" style=\"border:solid 1px #ddd;border-radius:8px;margin:5px;\"><a target=\"_blank\" style=\"text-decoration:none; color:#111;\" href=\"http://$a\"> $a</a><a target=\"_blank\" class=\"btn btn-primary\"style=\"float:right;\" href=\"https://subsites.geekvivek.com/site.php?domain_name=$a\">About</a></div>";
		
			}
		}
	else
		$domainname.="<h4 style=\"text-align:center;\">Nothing Found...</h4>";

	echo $domainname;
}

?>
<?php

$name=$_GET['namee'];


include "server_login.php";

$conn=server_login();

$sql="SELECT * FROM sites WHERE name='$name'";

$result=mysqli_query($conn,$sql);

	while($var=mysqli_fetch_array($result)){
	echo $var['logo_src']."     "."<br>";
		
	}

echo "hello";

?>
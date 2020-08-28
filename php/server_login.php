<?php


function server_login(){

$servername = "localhost";
$username = "diwakar";
$password = "DDwakar@1997";
$dbname = "subsites";
//Create connection

$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}
else 
return $conn;	


}

?>

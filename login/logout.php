<?php
session_start();
/*
$servername = "fdb19.awardspace.net";
$username = "2597358_numero";
$password = "DDwakar@1997";
$dbname = "2597358_numero";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 

$temp=$_SESSION['Email'];

  $sql = "UPDATE Nusers SET status=0 WHERE email_id='$temp'";
                                mysqli_query($conn,$sql);

		
			
			mysqli_close($conn);
                        

*/
session_destroy();

echo 1;
?>
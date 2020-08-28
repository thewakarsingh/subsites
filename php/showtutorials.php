<?php
$d=$_GET['q'];
include 'server_login.php';
$conn=server_login();

$sql="SELECT * FROM tutorials WHERE domainname='$d' ORDER BY likes";

$count=0;

$result=mysqli_query($conn,$sql);
while ($var=mysqli_fetch_array($result)) {
$count++;
?>

<div class="row" >
	<div class="col-xs-1"><?php echo $count;?></div>
	<div class="col-xs-8"><p><?php echo $var['text'];?></p></div>
	<div class="col-xs-3"><button onclick="liketutorial('<?php echo $d;?>')" class="btn btn-primary"><?php echo $var['likes'];?> likes</button> &nbsp 
		<button onclick="disliketutorial('<?php echo $d;?>')" class="btn btn-danger"><?php echo $var['dislikes'];?> dislikes</button></div>


<?php
}

?>
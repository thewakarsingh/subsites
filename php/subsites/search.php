

<?php
include 'php/session-tracking.php';

include 'header.php';


$conn=server_login();


	$search_text=$_GET['q'];

	$sql="SELECT * FROM sites WHERE name LIKE ('%$search_text%') OR category LIKE ('%$search_text%') OR domain_name LIKE ('%$search_text%')";

	$retval=mysqli_query($conn,$sql);

echo "<br><h3>&nbsp;your search result for</h3></b>";


echo '<h4> &nbsp;&nbsp;'.$search_text.'</h4>
<div class="container-fluid">';

	while($var = mysqli_fetch_array($retval)){

		printsiteinfo($var);


	}
	?>
</div>
	<?php

include 'footer.html';
?>	


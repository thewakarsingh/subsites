<?php
require 'php/session-tracking.php';

require "header.php";

$conn=server_login();

	if(isset($_SESSION['Email'])){

	?>
<script type="text/javascript" src="js/ajax_functions.js"></script>

	<script type="text/javascript">

	show_bookmarks();

</script>

<div id="bookmrk"></div>



<?php


}
else
	echo "We didn't found a restered user...";

include 'footer.html';

?>
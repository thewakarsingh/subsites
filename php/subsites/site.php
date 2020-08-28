
<?php

include 'php/session-tracking.php';
include "header.php";
include "php/php_functions.php";

?>
<?php

$domain_name=$_GET['domain_name'];



$conn=server_login();

$sql="SELECT * FROM sites WHERE domain_name='$domain_name'";

$result=mysqli_query($conn,$sql);

$var=mysqli_fetch_array($result);

?>
<br>

<div id="quicklook" style="display:none; background-color:#aaa; width:100%; height:100%;margin-top:-40px;position:absolute; z-index:999;">
	<a href="http://www.<?php echo $var['domain_name']; ?>" style="color:white;margin-left:45%;font-size:15px; text-decoration: none;"><?php echo $var['domain_name']; ?></a>
	<i  class="quicklooktoggle glyphicon glyphicon-close" style="cursor:pointer;color:#444;float:right; margin-right: 50px; margin-right: 30px;margin-top: 2px;margin-bottom: 2px; font-size: 30px;">X</i>
	<iframe style="height:100%; width:100%;" src="http://www.<?php echo $var['domain_name']; ?>"></iframe>
</div>

<div class="container" >

	<div class="row">

		
		<div class="col-xs-4">
			<a href="http://www.<?php echo $var['domain_name']; ?>">
			<img style="height:100px; width:100px; margin:auto; float: left" src="images/<?php echo $var['domain_name'];?>.png"/>
			</a>
		</div>

		

		<div class="col col-xs-8">

			<div class="row">

				<div class="col col-sm-4">

				<font style="color: #aa1121; font-size: 200%;margin-left: 20%;">
					<?php echo $var['domain_name'];?>
				</font>
				</div>

				<div class="col-sm-3">
					<a class="btn btn-primary btn-lg visitsitebtn" style="margin-left: 20%; " target="_blank" href="http://www.<?php echo $var['domain_name']; ?>">
							<font ">Visit site in new tab</font> 
					</a>

				</div>

				<div class="col-sm-2"><hr style="width: 0px;"></div>

				<div class="col-sm-3">
					<button class=" btn btn-info btn-lg visitsitebtn" style="margin-left: 20%;" value="<?php echo $var['domain_name']; ?>" onclick="addbookmark(this.value)">
							<font><i class="glyphicon glyphicon-bookmark" ></i> Add to Bookmark</font> 
					</button>

				</div>


				<div class="col-sm-3">
					<button class="quicklooktoggle btn btn-info btn-lg visitsitebtn" style="margin-left: 20%;" value="<?php echo $var['domain_name']; ?>" onclick="quicklook(this.value)">
							<font><i class=" glyphicon glyphicon-binacolour" ></i> Quick look this webite</font> 
					</button>

				</div>

			</div>
		</div>

	</div>

</div>

<div class="container">

	<div class="container row">	
		<dl>
			<dt>Description of Site.</dt>
			<dd><p style=""><?php echo $var['description']; ?></p></dd>
		</dl>
	</div>

	<div class="row">

		
		<div class="col-sm-4">
			<dl>
				<dt>Rating</dt>
				<dd><?php echo $var['rating']; ?>/10</dd>
			</dl>

			<br>
		</div> 

	</div>
<br><br>
<h3>Tutorials</h3>
	<div  id="tutorials" class="container-fluid">
		<hr style="height:4px;color:#444;width: 100%;">
		
<script type="text/javascript">show_tutorials("<?php echo $domain_name;?>")</script>



	</div>
		<h3 class="row container" >Similar Webites.</h3>
		<div class="row container" id="similarsites">
		

		<?php

		$category=$var['category'];

		$sql="SELECT * FROM sites WHERE category='$category' AND domain_name !='$domain_name'";

		$result=mysqli_query($conn,$sql);

		while ($var=mysqli_fetch_array($result)) {
			printsiteinfo($var);
		}


		?>


	</div>


	<div class="row" id="comments"><hr>
	Comments.

	<script>
		
	show_comments("<?php echo $domain_name; ?>");

	</script>

	</div>

</div>


<?php
include "footer.html";
?>
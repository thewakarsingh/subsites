
<?php

$domain_name=$_GET['domain_name'];

$ogtitle=$title="$domain_name information, tutorials and Similar Websites.";
$ogdescr="$domain_name information,tutorials and similar websites, explore the $domain_name.";
$ogurl=$url="https://subsites.geekvivek.com/site.php?domain_name=$domain_name";
$ogsitename="subsites.geekvivek.com";

include 'php/session-tracking.php';
include "header.php";
include "php/php_functions.php";

mysql_real_escape_string($domain_name);

$conn=server_login();

$sql="SELECT * FROM site_rank WHERE domain_name='$domain_name'";

$result=mysqli_query($conn,$sql);

$var=mysqli_fetch_array($result);

if(!mysqli_num_rows($var)){

?>
<br>

<div id="quicklook" style="display:none; background-color:#aaa; width:100%; height:100%;margin-top:-40px;position:absolute; z-index:999;">
	<a href="http://www.<?php echo $var['domain_name']; ?>" style="color:white;margin-left:45%;font-size:15px; text-decoration: none;"><?php echo $var['domain_name']; ?></a>
	<i  class="quicklooktoggle glyphicon glyphicon-close" style="cursor:pointer;color:#444;float:right; margin-right: 50px; margin-right: 30px;margin-top: 2px;margin-bottom: 2px; font-size: 30px;">X</i>
	<div id="quicklookdiv" style="height:100%; width:100%;" src="http://www.<?php echo $var['domain_name']; ?>"></div>
</div>

<div class="container" >

	<div class="row">

		
		<div class="col col-xs-4">
		    	<div class="row">

				<div class="col col-sm-4">

				<h3 >
					<?php echo $var['domain_name'];?>
				</h3>
				</div>
			    </div>
		    <div class="row">
    			<a href="http://www.<?php echo $var['domain_name']; ?>">
    			<img style="height:100px; width:100px; margin:auto;" src="<?php echo $var['binglogosrc'];?>"/>
    			</a>
			</div>
			
			
				<div class="row">
        
        		
        		<div class="col-sm-4">
        			
        			<br>
        		</div> 

	        </div>
			
		</div>

		

		<div class="col col-xs-8">

		
			<div class="row">

				<div class="col-sm-3">
					<a class="btn btn-primary btn-md visitsitebtn"  target="_blank" href="http://www.<?php echo $var['domain_name']; ?>">
							<h4>Visit site in new tab</h4> 
					</a>

				</div>

				<div class="col-sm-1"><hr style="width: 0px;"></div>

				<div class="col-sm-3">
					<button class=" btn btn-info btn-md visitsitebtn"  value="<?php echo $var['domain_name']; ?>" onclick="addbookmark(this.value)">
							<h4><i class="glyphicon glyphicon-bookmark" ></i> Add to Bookmark</h4> 
					</button>

				</div>
				
				<div class="col-sm-1"><hr style="width: 0px;"></div>


				<div class="col-sm-3">
					<button class="quicklooktoggle btn btn-info btn-md visitsitebtn"  value="<?php echo $var['domain_name']; ?>" onclick="quicklook(this.value)">
							<h4><i class=" glyphicon glyphicon-binacolour" ></i> Quick look this webite</h4> 
					</button>

				</div>

			</div>
		</div>

	</div>
	<div class="row container">	
    		    <dl><br><br>
    			<dt><h3>Description of Site.<h3></dt>
    			<dd><p  style="color:#333;mrgin-left:5%;width:80%;font-size:18px;text-align:justify;" ><?php echo $var['wikidescription']; ?></p><br><br></dd>
    		    </dl>
    </div>


</div>

<div class="container">
<br>
<h3>Tutorials</h3>
	<div  id="tutorials" class="container-fluid">
		<H5> NO TUTORIALS AVAILABLE FOT THIS WEBSITE.
		<hr style="height:4px;color:#444;width: 100%;">
		
<!--<script type="text/javascript">show_tutorials("<?php echo $domain_name;?>")</script>-->



	</div>
		<h3 class="row container" >Similar Webites.</h3>
		<div class="row container" id="similarsites">
		

		<?php

		$category=$var['category'];

		$sql="SELECT name,domain_name,binglogosrc from site_rank WHERE category='$category' LIMIT 4";

		$result=mysqli_query($conn,$sql);

		while ($var=mysqli_fetch_array($result)) {
?>

<script type="text/javascript">
   var arr = <?php echo json_encode($var); ?>;
   
        printsiteinfoa(arr);	

</script>


<?php
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
}
else{

	echo '<h1 domain name is not our database.</h1>';

}
include "footer.html";
?>
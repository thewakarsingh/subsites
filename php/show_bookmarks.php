<script>
    function printsiteinfoa(temp){
        
        
		var  info='<div class="col-sm-3"><div class="sitebox" style="border:solid 1px #888; border-radius:7px;">'+
					  '<a target="_blank" href="http://www.'+temp[1]+'"><img class="card-image sitelogo" src="'+temp[2]+'"alt="'+temp[1]+'" style="width:100%"></a>'+
					  '<br><br><div class="container" style="height:40px;"><div class="row">'+
						'<div class="col col-xs-2"><button value="'+temp[1]+'" onclick="addbookmark(this.value)" class="btn btn-md glyphicon glyphicon-bookmark" style="cursor:pointer;font-size:20px; float:right;"></button>'+
						'</div><div class="col col-xs-8><h3 style="text-align:center;">'+temp[1]+'</h3>'+
						'</div><div class="col col-xs-2"><a class="glyphicon glyphicon-star" style="font-size:20px; float:left; text-decoration:none; color:black; " href="site.php?domain_name='+temp[1]+'"></a>'+
		
					  '</div></div></div></div></div>';
		
		document.write(info);
		}

		function printsiteinfoaa(temp){

var info='<div class="col-sm-3"><a href="http://www.'+temp[1]+'">'+temp[1]+'</a></div>';


document.write(info);
}
		</script>
<?php
session_start();
include 'server_login.php';
$conn=server_login();
?>
<div class="container-fluid">
<div class="container-fluid site-row">
	<h2>Bookmarks</h2>	
<div class="row ">

<?
$name=$_SESSION['Email'];
		$sql="SELECT bookmarks FROM user WHERE email_id='$name'";
		$result=mysqli_query($conn,$sql);

	while($var=mysqli_fetch_array($result)){
			$bookmarks=$var['bookmarks'];
			$bookmarks=explode(',',$bookmarks);
			foreach ($bookmarks as $var){
				
			$sql="SELECT name,domain_name,binglogosrc FROM site_rank WHERE domain_name='$var'";
	
	$retval=mysqli_query($conn,$sql);

	while($var = mysqli_fetch_array($retval)){

		?>

<script type="text/javascript">

   var arr = <?php echo json_encode($var); ?>;
	printsiteinfoa(arr);
</script>
	
		<?php			
				}
		}
		}
?>
</div>
</div>
</div>
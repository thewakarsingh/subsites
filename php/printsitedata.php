<?php

$rank=$_GET['rank'];

include 'server_login.php';

include 'functions.php';

$conn=server_login();

$sql="SELECT * from site_rank WHERE rank=$rank";
$query=mysqli_query($conn,$sql);

$var=mysqli_fetch_array($query);

//$var=getsiteinfo($var['domain_name']);
$cat=$var['category']=findcategory($var['domain_name']);
$desc=$var['description']=finddescription($var['domain_name']);
//$var['keywords']=findcategory($var['keywords']);
$lsrc=$var['logo_src']=previewlogo($var['domain_name']);
$wdesc=$var['wikidescription']=wikidescription($var['domain_name']);
$key=$var['keywords']=findkeywords($var['domain_name']);
$blogo=$var['binglogo']=previewbinglogo($var['domain_name']);

$sql="UPDATE site_rank SET category='$cat', description='$desc',title='$key',wikidescription='$wdesc',logo_src='$lsrc',binglogosrc='$blogo' WHERE rank='$rank'";


$res=mysqli_query($conn,$sql);
if($res)
    echo $rank.", ";
mysqli_close($conn);

/*
?>


<div class="row container-fluid" style="border:solid 1px #333;">
    <div class="col-xs-1"><input type="number" value="<?php echo $var['rank'];?>"  style="width:50px;"></div>
    <div class="col-xs-1"><input type="text" value="<?php echo $var['domain_name'];?>"  style="width:80px;"></div>
    <div class="col-xs-1"><input type="text" value="<?php echo $var['category'];?>"  style="width:80px;"></div>
    <div class="col-xs-2"><textarea  value="<?php echo $var['wikidescription'];?>"><?php echo $var['wikidescription'];?></textarea></div>

    <div class="col-xs-2"><textarea  value="<?php echo $var['description'];?>"><?php echo $var['description'];?></textarea></div>
    
    <div class="col-xs-1"><input type="text" value="<?php echo $var['keywords'];?>"  style="width:80px;"></div>
    <div class="col-xs-2">
        <img src="<?php echo $var['logo_src'];?>" style="height:30px; width:30px; margin-left:40px;"><br>
    
    <input type="text" value="<?php echo $var['logo_src'];?>"></div>
    <div class="col-xs-2">
    <img src="<?php echo $var['binglogo'];?>" style="height:30px; width:30px; margin-left:40px;"><br>
 <textarea type="text" value="<?php echo $var['binglogo'];?>"><?php echo $var['binglogo'];?></textarea></div>
</div>
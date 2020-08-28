 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/general.css">
<script src="bootstrap/js/jquery.min.js"></script>
 

<script> 
$(document).ready(function(){
    $("button").click(function(){
        $("div").animate({left: '250px'});
    });
});
</script>
</head>
<body>

<?php



  ?>
<img src="<?php echo $g; ?>">



<?php





//$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"; 

// The Text you want to filter for urls
$text = $c;

// Check if there is a url in the text
/*if(preg_match($reg_exUrl, $text, $url)) {

	//echo $text;

       // make the urls hyper links
       $d= preg_replace($reg_exUrl, "{$url[0]}", $text);
       //explode("\"",$d);


       echo '<a heref="';
       echo $d;
       echo '> hello theer<a/>';

} else {

       // if no urls in the text just return the text
      // echo "failed";
     }


*/

?>
</body>

</html>

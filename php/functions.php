<?php

function mailtoemail($to,$message){

			require("class.phpmailer.php");
			$mail = new PHPMailer();

			$mail->IsSMTP();
			$mail->Host = "smtp.gmail.com";

			$mail->SMTPAuth = true;
			$mail->SMTPSecure = "ssl";
			$mail->Port = 465;
			$mail->Username = "ddwakar3@gmail.com";
			$mail->Password = "DDwakar@1997";

			$mail->From = "ddwakar3@gmail.com";
			$mail->FromName = "Test Mail";
			$mail->AddAddress($to);

			//$mail->AddReplyTo("mail@mail.com");

			$mail->IsHTML(true);

			$mail->Subject = "Testing Mail ";
			$mail->Body = "$message hello world";
			//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
			if($mail->Send()){
				return 1;

			}
			else{
				return 0;
			}

}


function time_diff($t1){//   to find present date- t1

	//echo $t1.",";

		$date=explode(" ",$t1);

		$ad=$date['0'];
		$cd=date("y-m-d");
		$cd = array("20",$cd);
		$cd=implode("", $cd);

		//echo $cd.",";
		
		$at=$date['1'];

		//echo $at;
		//echo " ";
		//echo date("h:m:s");
		$at=explode(":", $at);

		$ch=date("H");
		$cm=date("i");
		$cs=date("s");
		//echo date("H:i:s");
		//echo "---".$ch.":".$cm.":".$cs."---";
		$ch=4;
		$cm=30;

		$ad=date_create($ad);
		$cd=date_create($cd);

		$diff=date_diff($cd,$ad)->format('%d');

		$time=$diff.' Days ago';

		if($diff==0){

			if($at['0']==$ch){

				if($at['1']==$cm){

						return "Just now";

								}
				else{
					$time=$cm-$at['1'];

					$time=$time.' Minutes ago';

					return $time;
					}
				}

			else{

				$time=$ch-$at['0'];

				$time=$time.' Hours ago';

				return $time;

				}
}

		return $time;



}

function previewlogo($domainname){


		include 'simple_html_dom.php';

		$html= file_get_contents("https://$domainname");

		$aa=strpos($html,"<link");

		$bb=strpos($html,"icon",$aa);

		$cc=strpos($html,"href",$bb);

		$aa=substr($html,$cc,1200);

		$ee=explode("\"",$aa);

		if(strpos($ee[1], ".png")||strpos($ee[1], ".jpg")||strpos($ee[1], ".ico")||strpos($ee[1], ".svg")){
			
			if(!strpos($ee[1], "/"))
				return "http://$domainname".$ee[1];
			else
			return $ee[1];

		}
		else 
		return 0;

		
		}



	function wikidescription($domainname){

		$dom=explode(".",$domainname);
		$domainname=$dom[0];
		$html= file_get_contents("https://duckduckgo.com/?q=$domainname&t=hk&ia=web");

		$aa=strpos($html,"AbstractText");
		
		$cc=substr($html,$aa,1500);

		$dd=explode("\"",$cc);

		return $dd[2];

	}

	function previewbinglogo($domainname){
	
		$html= file_get_contents("https://www.google.com/search?q=$domainname+logo&sxsrf=ACYBGNSgLx8RAqBaAPwmx5R5VVgeM48izg:1569429942145&source=lnms&tbm=isch&sa=X&ved=0ahUKEwj4682RtuzkAhW-zIsBHUXvA6YQ_AUIESgB");
	
		$aa=strpos($html,"width:25%;word-wrap:break-word");

		$aa=strpos($html,"src",$aa);
		$aa=substr($html,$aa,1200); 

		$bb=explode("\"",$aa);

		return $bb[1];
		
			}

	function findkeywords($domainname){

		$html= file_get_contents("http://$domainname");

		$aa=strpos($html,"<title");

		$bb=strpos($html,"</title>",$aa);

		$cc=substr($html,$aa,$bb);

		$dd=explode(">",$cc);

		$ee=explode("<",$dd[1]);

		return $ee[0];

	}


  function findcategory($domainname){


		$html= file_get_contents("https://fortiguard.com/search?q=$domainname&engine=1");


		  $aa=strpos($html, "Category:");


		  $cc=substr($html,$aa,1200);

		  $ee=explode(">",$cc);

		  $ee=explode("<",$ee[1]);


	
		return $ee[0];
  }


  function finddescription($domainname){


		$html= file_get_contents("http://$domainname");

		  $aa=stripos($html, "description");

		  $bb=stripos($html, "content",$aa);

		  $cc=substr($html,$bb,1200);

		  $ee=explode("\"",$cc);

		 $gg=strpos($ee[1]," ");
		if($gg)
		return $ee[1];
		else
		return 0;

  }

function printsiteinfo($var){
?>
<script type="text/javascript" src="../js/ajax_functions.js"></script>
<div class="col-xs-3 site-info">
			<div ><a target="_blank" href="http://www.<?php echo $var['domain_name']; ?>" >
				<img class="logo" src="<?php echo $var['logo_src'];?>"></a>
				
			</div>
			<div class="container-fluid">	
				<div class="row">
					<form action="site.php" method="GET" class="col-xs-4">
						<input type="text" style="width:0px;height:0px;" class="invisible" name="domain_name" 
						value="<?php echo $var['domain_name']; ?>">

						<button type="submit" class="btn btn-link btn-lg"><i class="glyphicon glyphicon-exclamation-sign"></i></button>
					</form>
					<span class="col-xs-4"><?php echo trim($var['domain_name'],'.com'); ?></span>
					
						<button value="<?php echo $var['domain_name']; ?>" onclick="addbookmark(this.value)" class="btn btn-link btn-lg"><i class="glyphicon glyphicon-bookmark"></i></button>
			
				</div>
			</div>	
		</div>

<?
}


/*
    function findcategory($domainname){


		$html= file_get_contents("http://sitereview.bluecoat.com/#/lookup-result/$domainname");

		
		
		$start=0;
		$temp=3;

		$category=array("0","0","0");

		 $a=strpos($html, "<h4 class=\"info_title\">Category:",$start);


		while($temp){

		 

		  $aa=strpos($html, "href=\"\">",$a);

		  $bb=strpos($html, "</a>",$a);

		  $cc=substr($html,$aa+8,$bb-$aa+8);

		  $a=$bb+2;

		  $category[3-$temp]=$cc;
}

		$category=implode(" ,", $category);

		return $category;
  }
  */
?>
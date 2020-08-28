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
		$ch=$ch+5;
		$cm=$cm-30;
		


		$ad=date_create($ad);
		$cd=date_create($cd);

		$diff=date_diff($cd,$ad)->format('%d');

		$time=$d
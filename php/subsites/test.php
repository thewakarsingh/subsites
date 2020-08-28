<?php

echo sha1("ram1");

//echo time_diff(2018-01-01 06:53:41);

function time_diff($t1){//   to find present date- t1

	echo  $t1;

		$date=explode(" ",$t1);



		$ad=$date['0'];
		$cd=date("y-m-d");
		
		$at=$date['1'];

		//echo $at;
		//echo " ";
		//echo date("h:m:s");
		$at=explode(":", $at);

		$ch=date("h");
		$cm=date("i");
		$cs=date("s");

		$ad=date_create($ad);
		$cd=date_create($cd);

		$diff=date_diff($cd,$ad)->format('%d');

		$time=$diff.' Days ago';

		if($diff==0){

			if($at['0']==$ch){

				if($at['1']==$cm){

						$time=$cs-$at['3'];

						$time=$time.' Seconds ago';

						return $time;

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



?>

The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.

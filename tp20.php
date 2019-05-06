<?php
class db{

	$sum = 0;
	function CountSteps($x,$y){
	
		for($i=0;$i<$x;$i++){
			for($j=0;$j<$y;$j++){
				$sum = $i+$j;
			}
		}
	
	} 

}



$res = db::CountSteps(1,1);
echo $res;


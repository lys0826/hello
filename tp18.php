<?php

class Mach{

	public static function Number($n){
		for($i=0;$i<=$n);$i++){
			if($i == 1){
				return $i;
			}
		}
	}



}

$res = Mach::Number(10);
echo $res;

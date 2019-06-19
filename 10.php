<?php

class Mash{

	function Once($array){
		for($i=0;$i<count($array);$i++){
			for($j=1;$i<count($array)-1;$j++){
				if ($i == $j) {
					return $i;
				}
			}	
		}
	}


}

$array = [2,4,3,6,3,2,5,5];

echo Mash::Once($array);
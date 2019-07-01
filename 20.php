<?php

class Mash{

	public static function CountSteps($x,$y) {
		for($i=0;$i<$x;$i++){
			if ($i == $y) {
				return $x;
			}
			if ($i == $x) {
				return $y;
			}
		}
	}
}

echo Mash::CountSteps(2,2);




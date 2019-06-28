<?php

Class Mash{

	public static function NumberOf1($n){
		for ($i=0;$i<$n;$i++) {
			if ($i == 1) {
				return $i;
			}else{
				return 2;
			}
		}
	}
}

$res = Mash::NumberOf1(10);
echo $res;



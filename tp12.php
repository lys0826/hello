<?php

class Tp12{
	public static function Sum_Solution($n){
		$sum = $n;
		$sum&&($sum+=self::Sum_Solution($n-1));
		return $sum;
	}
}

$res = Tp12::Sum_Solution(15);

print_r($res);


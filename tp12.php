<?php

class Mach{

	public static function Sum_Solution($n){
		$sum = $n;
		$sum&&($sum+=self::Sum_Solution($n-1));

		return $sum;
	}

}

$res = Mach::Sum_Solution(15);

print_r($res);


/*

	1.定义一个类
	2.用静态分法调用
	3.判断
	4.返回值
	5.输出

*/


<?php

class Mash{


	public static function calFn($n,$m){

		$arr = range($n,$m);
		$str = implode($arr);
		// var_dump($str);die;
		return substr_count($str,1);
	
	}

}

$n = 1;
$m = 20;

echo Mash::calFn($n,$m);

/*

1.定义两个变量
2.用range定义两个数组的区间
3.转换字符串
4.返回值
5.输出


*/
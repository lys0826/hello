<?php

class fun{

	public static function calFn($n,$m){
		$arr = range($n,$m);
		$str = implode($arr);
		return substr_count($str,1);
	}

}

$n = 1;
$m = 13;

echo fun::calFn($n,$m);

/*
	1.先定义一个类
	2.在类外定义两个值$n,$m
	3.静态分法接值$n和$m
	4.再用range建立一个包含指定范围
	5.之后分割字符串
	6.计算1在字串出现的次数
	7.在类外调用静态分法，在输出最好的值
*/


<?php

class Mach{

	public static function NumberOf1($n){
		for($i=0;$i<$n;$i++){
			if ($i==1) {
				return $i;
			}
		}
	}

}

$res = Mach::NumberOf1(1);
echo $res;



/*
	1.用静态分法
	2.循环
	3.判断
	4.用静态分法调用
	5.输出
*/
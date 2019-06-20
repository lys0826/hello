<?php

class Mash{

	public static function ReverseSentence($str){
		$str1 = explode(' ', $str);
		$arr = array_reverse($str1);
		$arr1 = implode(' ', $arr);
		return $arr1;
	}


}

$str = "student. a am I";

echo Mash::ReverseSentence($str);


/*
	1.先创建一个类
	2.再用静态分法
	3.函数分割字符串
	4.返回一个单元顺序相反的数组 
	5.返回值
	6.调用输出


*/

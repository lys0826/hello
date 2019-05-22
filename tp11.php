<?php

$str = "student. a am I";
echo "$str" ."<br>";
//使用一个字符串分割另一个字符串
$arr = explode(' ', $str);
//返回一个单元顺序相反的数组 
$arr1 = array_reverse($arr);

$res = implode(' ', $arr1);

print_r($res);






/*
	1.定义一个字符串，
	2.把这个字符串按空格分割
	3.然后倒序排序
	4.打印输出

*/

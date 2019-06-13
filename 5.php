<?php

$arr = [1,2,3,4,5,6];
$ji = [];
$end = [];
foreach ($arr as $key => $val) {
	
	
	if ($val%2 == 1) {

		$ji[] = $val;
	}else{

		$end[] = $val;
	}

}

print_r(array_merge($ji,$end));



/*
	1.定义一个数组
	2.在定义两个空数组
	3.用循环处理数组
	4.在判断值是否是奇数或偶数，放入空数组中
	5.用array_merge合并数组




*/




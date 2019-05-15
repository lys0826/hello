<?php
$array = [1,2,3,4,5,6];
$ji = [];
$end = [];

foreach ($array as $k => $v) {
	if ($v%2==1) {
		$ji[] = $v;
	}else{
		$end[] = $v;
	}
}

print_r(array_merge($ji,$end));


/*
	1.首先是定义一个数组；
	2.之后再定义两个空数组；
	3.循环这个数组；
	4.判断数组的值，之后放入之前定义的空数组中；
	5.最后合并输出；
*/







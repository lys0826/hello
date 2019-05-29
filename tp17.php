<?php


$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];
	
$res = array_merge($arr_A,$arr_B); 
		
 sort($res);	

foreach ($res as $key => $val) {
    echo "res[".$key."] = " . $val . "\n";
}


/*

	1.先定义两个数组；
	2.再用array_merge合并两个数组；
	3.再用sort排序；
	4.最后循环输出；

*/


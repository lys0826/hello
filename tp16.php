<?php

$target = 7 ;
$array=[
	[1,2,8,9],
	[2,4,9,12],
	[4,7,10,13],
	[6,8,11,15]
];

function Find($target,$array){
	for($i=0;$i<$array;$i++){
		if ($array($array[$i])==$target) {
			return true;
		}else{
			return false;
		}
	}
}


/*
	1.先定义一个二维数组
	2.在定义一个数组之间的一个数
	3.调用
	4.循环判断
	5.输出
*/



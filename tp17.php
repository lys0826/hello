<?php

$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];

function Combine($arr_A, $arr_B) {
	
	$arr = array_merge($arr_A,$arr_B);
	// print_r($arr);die;
	$res = sort($arr);
	echo $res;
	
}


	
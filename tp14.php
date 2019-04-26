<?php

var_dump(sum([1,2,3,4,5,6,7,8,9],7));

function sum($arr,$s){
	$a = [];
	$len = count($arr);
	// print_r($len);exit;
	if($len < 2){
		return false;
	}
	for($i=0;$i<$len;$i++){
		for($j=0;$j<$len;$j++){
			if($arr[$i]+$arr[$j] == $s){
				$a[] = $arr[$i]*$arr[$j];
			}
		}
	}
	sort($a);
	return $a[0];
}






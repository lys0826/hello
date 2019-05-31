<?php

$arr = [1,2,3,4,5,6,7];
$log = 3;

$sum = count($arr);
// print_r($sum);die;
$res = ceil($sum/2);

if ($res == $log) {
	echo $log;
}else{
	echo false;
}


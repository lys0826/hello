<?php

$target = 15;
$array=[
	[1,2,8,9],
	[2,4,9,12],
	[4,7,10,13],
	[6,8,11,15]
];

function Find($target,$array){
	if ($target < $array[0][0]) {
		return false;
	}

	$len = count($array);
	$leng = count($array[0]);
	if ($target > $array[$len-1][$leng-1]) {
		return false;
	}

	foreach ($array as $k => $v) {
		if (in_array($target, $v)) {
			return true;
		}
	}
}

echo Find($target,$array);
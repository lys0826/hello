<?php

function Add($num1, $num2){

	if ($num2 == 0) {
		return $num1;
	}

	$sum = $num1 ^ $num2;
	$num = ($num1 & $num2) << 1;

	return Add($sum,$num);

}

$res = array(array());

print_r($res);




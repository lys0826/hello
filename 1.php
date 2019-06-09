<?php

$str = 'Have you ever gone shopping and';

function one($str){

	$arr = str_replace(' ', '', $str);
	 // echo $arr;die;
	$len = strlen($arr);
	// echo $len;die;
	$list = [];

	for($i=0;$i<$len;$i++){

		if (isset($list[$arr[$i]])) {
			$list[$arr[$i]] ++;
		}else{
			$list[$arr[$i]] = 1;
		}


		if ($list[$arr[$i]] == 3) {
			return $list[$arr[$i]];
		}
	}

}


echo one($str);


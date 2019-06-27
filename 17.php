<?php

 $arr_A = [1,3,6,9];
 $arr_B = [2,4,5,8,20];


	$res = array_merge($arr_A,$arr_B);
	// var_dump($res);die;
	sort($res);
foreach ($res as $key => $val) {
    echo "res[".$key."] = " . $val . "\n";
}


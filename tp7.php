<?php

function GetUglyNumber_Solution($index){

	while ($index%2 == 0) {
		$index = $index/2;
	}
	while ($index%3 == 0) {
		$index = $index/3;
	}
	while ($index%5 == 0) {
		$index = $index/5;
	}

	if ($index == 1) {
		echo "丑数";
	}else{
		echo "不是丑数";
	}


}

return GetUglyNumber_Solution(12);

/**
* 1.在分法外定义一个变量
* 2.先用分法调用一个变量
* 3.再用while循环判断
* 4.先判断这个变量除2==0就不是丑数，如果不等于0继续执行
* 5.在判断这个变量除3==0就不是丑数，如果不等于0继续执行
* 6.之后判断这个变量除5==0就不是丑数，如果不等于0继续执行
* 7.最后用if判断变量==1是丑数，不等于不是丑数
**/








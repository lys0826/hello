<?php

$target = 7;
$array=[
	[1,2,4,6],
	[3,4,9,12],
	[5,7,10,13],
	[8,9,11,15]
];
function Find($target,$array){
	for($i=0;$i<$array;$i++){
		if ($array[$array[i]] == $target) {
			return true;
		}
	}
}





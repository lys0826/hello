<?php

function calSteps($n){

	if($n >= 3){
		return calSteps($n-1) + calSteps($n-2);
	}elseif($n==1){
		return 1;
	}elseif($n==2){
		return 2;
	}

}

echo calSteps(7);

// 1 2 3 5 8 13 21


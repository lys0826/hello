<?php

function index($n,$m){
	if($n<1 || $m<1){
		return -1;
	}

	if ($n == 0) {
		return 0;
	}

	return (($n-1,$m)+$m)%$n;
}

return index(4,3);


?>
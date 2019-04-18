<?php

function shu($nmber){

	while ($nmber%2 == 0) {
		$nmber = $nmber/2;
		echo 2 ."<br>";
	}
	while ($nmber%3 == 0) {
		$nmber = $nmber/3;
		echo 3 ."<br>";
	}
	while ($nmber%5 == 0) {
		$nmber = $nmber/5;
		echo 5 ."<br>";
	}

	if($nmber == 1){
		echo "这个数是丑数";
	}else{
		echo "这个数不是丑数";
	}


}

return shu(26);

?>
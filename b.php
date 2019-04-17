<?php

shu(66);
function shu($nmber){

	while($nmber%2 == 0){
		$nmber = $nmber/2;
	}
	while($nmber%3 == 0){
		$nmber = $nmber/3;
	}
	while($nmber%5 == 0){
		$nmber = $nmber/5;
	}

	if($nmber==1){
		echo "这是丑数";
	}else{
		echo "这不是丑数";
	}
}



?>
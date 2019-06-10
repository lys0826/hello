<?php

for($i=1;$i<=9;$i++){
	for($j=1;$j<=9;$j++){
		for($q=1;$q<=9;$q++){
			if ($i*$i*$i+$j*$j*$j+$q*$q*$q == $i*100+$j*10+$q) {
				echo "$i $j $q"."<br>";
			}
		}
	}
}





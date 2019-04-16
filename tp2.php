<?php
			
		

	for ($i=1; $i <= 100; $i++) { 
		for ($j=0; $j <= 100; $j++) { 	
			for ($a=0; $a <= 100; $a++) { 
				if($i*$i*$i + $j*$j*$j + $a*$a*$a == 100*$i + 10*$j + $a){
					echo "$i $j $a";
					echo "<pre>";
				}
			}
		}
	}


?>

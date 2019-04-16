<?php

	//水仙花数
	for($q=1;$q<=9;$q++){

	    for($w=0;$w<=9;$w++){

	      for($e=0;$e<=9;$e++){

	        if($q*$q*$q + $w*$w*$w + $e*$e*$e == 100*$q + 10*$w + $e){

	           echo "$q $w $e "."<p>";

	        }

	      }

	    }

	}

	//1-100的和
	//第一种普通
	$sum=0; 
	for($i=1;$i<=100;$i++){
		$sum+=$i.'<br/>'; 
	} 
	echo $sum;

	echo '<br/>';	
	//第二种递归法
	function sum($n){
		return $n==1?1:$n+sum($n-1);
	}
	echo sum(100);
	echo '<br/>';
	
	//第三种
	$n = 100;
	echo (1+$n)*($n/2);


?>
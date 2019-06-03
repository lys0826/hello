<?php

class Mash
{

	public static function CountSteps($x,$y)
	{
		for($x=0;$x<2;$x++)
		{
			for($y=0;$y<2;$y++)
			{
				return true;
			}
		}
	}
}
$res = Mash::CountSteps(1,1);
echo $res;

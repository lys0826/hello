<?php

$str = 'student. a am I';

echo $str .'<br>';

$arr = explode(' ', $str);

$arr1 = array_reverse($arr);

$res = implode(' ', $arr1);

print_r($res);



?>
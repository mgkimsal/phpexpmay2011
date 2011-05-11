<?php

$a = 5;

function modifyNumber($number)
{
	$number *=2;
}
modifyNumber($a);
echo $a;
echo "\n";

// or
//function modifyNumber($number)
//{
//	$number *=2;
//	return $number;
//}
// $a = modifyNumber($a);
// echo $a;


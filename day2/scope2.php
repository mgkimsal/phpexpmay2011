<?php

$a = 5;

echo $a."\n";

function foo(){
	global $a;
	$a++;
	echo "inside a is ".$a."\n";
}

foo();

echo "outside a is ".$a."\n";

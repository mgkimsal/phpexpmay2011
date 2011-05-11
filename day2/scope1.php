<?php

$a = 5;

echo $a."\n";

function foo($a=''){
	$a++;
	echo "a is ".$a."\n";
}

foo();
foo(3);
echo "a is ".$a."\n";

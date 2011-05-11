<?php
$a = 5;
echo $a."\n";

function foo(){
	// $GLOBALS allows access to all variables defined in global scope
	// via a special array mechanism
	$GLOBALS['a']++;
	echo "inside a is ".$GLOBALS['a']."\n";
}

foo();

echo "outside a is ".$a."\n";

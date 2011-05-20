<?php
error_reporting(~E_ALL);

function foo() {
try {
	$f = fopen("http://www.yahoo.com/", "r");
	if(!$f)
	{
		throw new Exception("no file found");
	}
	$line = fgets($f,5);
	if(strlen($line)<10)
	{
		throw new Exception("too short");
	}
	echo $line;
} catch (Exception $e) {
	echo $e->getTraceAsString()."\n";
	echo $e->getLine()."\n";
	echo $e->getMessage();
}
}

function bar(){
	foo();
}

bar();

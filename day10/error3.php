<?php
error_reporting(~E_ALL);
class fileException extends Exception {}
class mylengthException extends Exception {}
try {
	$f = fopen("http://www.yahoo.com/", "r");
	if(!$f)
	{
		throw new fileException("no file found");
	}
	$line = fgets($f,4);
	if(strlen($line)<10)
	{
		throw new mylengthException("too short");
	}
	echo $line;
} catch (fileException $e) {
	echo "Sorry file didn't load!";
	// log file info here
} catch (Exception $e) {
	if($e instanceof fileException) {
		echo "yes it matches!\n";
	}
	echo $e->getMessage();
}
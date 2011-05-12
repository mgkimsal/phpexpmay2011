<?php

$f = fopen("csvfile.txt","r");
// grab the top line
$top = fgetcsv($f);
// loop
while($line = fgetcsv($f)) {
	$newline = array();
	foreach($top as $k=>$v)
	{
		$newline[strtolower($v)] = $line[$k];
	}
	echo $newline['name']."\n";
//	print_r($newline);
}
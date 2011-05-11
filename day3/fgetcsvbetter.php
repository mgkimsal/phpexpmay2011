<?php

$f = fopen("csvfile.txt","r");
// grab the top line
$top = fgetcsv($f);
// loop
while($line = fgetcsv($f)) {
	foreach($top as $k=>$v)
	{
		$newline[strtolower($v)] = $line[$k];
	}
	print_r($newline);
}
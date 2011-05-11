<?php

$f = fopen("csvfile.txt","r");
while($line = fgetcsv($f)) {
	print_r($line);
}
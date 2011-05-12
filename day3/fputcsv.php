<?php
$people = array("michael","Daniel","James","Jeff");

$file = fopen("newcsv.txt","w");
// comma
//fputcsv($file, $people);
// or tab
fputcsv($file, $people, "\t");
fclose($file);
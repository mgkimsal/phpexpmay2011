<?php
$people = array("michael","dave","joe","lesley");

$file = fopen("newcsv.txt","w");
// comma
//fputcsv($file, $people);
// or tab
fputcsv($file, $people, "\t");
fclose($file);
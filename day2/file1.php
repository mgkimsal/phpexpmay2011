<?php
//$data = file_get_contents("http://yahoo.com");
//echo $data;
//die();

// cooler
$location = "detroit";
$type = "pizza";
$select = "select * from local.search where query=\"$type\" and location=\"$location\"";
$url = "http://query.yahooapis.com/v1/public/yql?format=json&q=".urlencode($select);
$info = file_get_contents($url);
$j = json_decode($info);
print_r($j);

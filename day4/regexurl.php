<?php
$url = "www.bbc.co.uk";
$preg = "/^[\w\.]+\.[a-zA-Z]{2,4}$/";

echo preg_match($preg, $url, $matches)>0 ? "matches":"no match";
echo "\n";

$url = "www.bbc.co.uk/worldservice/";
$preg = "/^[\w\.]+\.[a-zA-Z]{2,4}(?:\/.{3,20})$/";
echo preg_match($preg, $url, $matches)>0 ? "matches":"no match";

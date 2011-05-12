<?php

$regex = "/mike/";
$regex = array("/mike/","/mark/");
$string = "my name is mike and my brothers are matt, mark and johnpaul";

$temp = preg_replace($regex, array("foo","bar"),$string);
print_r($temp);
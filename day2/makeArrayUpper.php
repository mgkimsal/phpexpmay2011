<?php
$array = explode(' ', 'Zend Training - Building Security into your PHP Application');
$array[] = array('Red','Green','Blue');

function makeArrayUpper(&$array) {
 	if(!is_array($array)) {
		return false;
	}
	foreach($array as $k => $v) {
		if(!makeArrayUpper($v)) {
			If(is_string($v)) {
				$array[$k] = strtoupper($v);
			}
		}
	}
	return true;
}

echo makeArrayUpper($array);
var_dump($array);
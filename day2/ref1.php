<?php
$people = array();
	$person['name'] = "mike";
	$person['email']['home'] = "mgkimsal@gmail.com";
	$person['email']['work'] = "mgkimsal@gmail.com";
	$person['phone'] = "9198274724";
$people[4] = $person;
	$person['name'] = "jeff";
	$person['email']['home'] = "jeff@gmail.com";
	$person['email']['work'] = "jeffwork@gmail.com";
	$person['phone'] = "jeff's number";
$people[] = $person;

$jeffemail = $people[5]['email'];  // without a & reference
//$jeffemail = &$people[5]['email']; // with a & reference

$jeffemail['home'] = "newemail@gmail.com";

print_r($people);

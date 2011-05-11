<?php


$a=43;
switch($a)
{
	case($a==43):
		echo "a is 43";
		break;
		
	case($a<43):
		echo "a < 43";
		break;	
	default:
		echo "dunno!";
		
}


die();

$a=5;
echo ($a<6) ? "a is < 6" : "a is >= 6";
die();


if($a>$b):
echo 'wwwwww';
	echo 'www';
endif;


die();

$a = 4;
echo $a++;
echo "\n";
echo ++$a;
echo "\n";
echo $a--;
echo "\n";
echo --$a;

die();
$f = array(7,5.0, 6.0, 6.5);
if(in_array(5, $f)){
	echo "5 is in the haystack!\n";
}
if(in_array(5, $f, true)){
	echo "YES 5 is in the haystack!\n";
}

die();
$people = array();

$person = array();
$person['name'] = "mike";
$person['email'] = "mgkimsal@gmail.com";
$person['phone'] = "9198274724";

$people[4] = $person;

$person = array();
$person['name'] = "jeff";
$person['email'] = "jeff@gmail.com";
$person['phone'] = "jeff's number";


$people[] = $person;


echo $people[5]['name'];


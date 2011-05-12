<?php
// http://www.php.net/manual/en/filter.filters.php 
// for more info

$x = "mkimsal@gmai";

// reportedly worked earlier, but 5.3.1 > problems?

$f = filter_var($x, FILTER_VALIDATE_EMAIL);
if($f) { 
	echo $x.' is good';
} else {
	echo $x. ' is no good';
}

<?php 
$f = fopen("http://yahoo.com/","r");
// filters before
//print_r(stream_get_filters());
//die();

// add a built-in filter from that list
stream_filter_append($f, "string.toupper");

// uncomment for more filter fun
stream_filter_append($f, "string.strip_tags");

// watch how the filter affects the behaviour
while(!feof($f)) {
	$line = fgets($f);
	echo $line;
}
fclose($f);
exit();

// for creating custom filters, see
// http://www.php.net/manual/en/function.stream-filter-register.php

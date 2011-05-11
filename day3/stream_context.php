<?php
$options = array(
	'http'=>array(
	    	'method'=>"POST",
	    'header'=>"Cookie: mycookie=myvalue\r\n"
	)
);
// make the context 
$context = stream_context_create($opts);

$fp = fopen('http://kimsal.com/', 'r', false, $context);
fpassthru($fp);
fclose($fp);

// we may not see anything, but we would see POST
// method in the logs at the very least.

<?php 

set_error_handler("myNoticeErrors", E_NOTICE);
set_error_handler("myOtherErrors", E_ALL & ~E_NOTICE);

trigger_error("WHOAH!", E_USER_WARNING);

$x.= "333";
echo "Continuing on";


function myErrors($code, $message, $file, $line, $ctx) {
	echo "Encountered error: $message on line $line of file $file\n";
}


?>
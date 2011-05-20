<?php 

//set_error_handler("myCustomErrorHandler2");
set_error_handler("myCustomErrorHandler", E_NOTICE & E_WARNING);

function myCustomErrorHandler($errorCode,$errorMessage, $errorFile, $errorLine) { 
	echo "error message $errorMessage in file $errorFile on $errorLine";
	if($errorCode==E_NOTICE){
		die("\nCAN'T HAVE ANY NOTICES IN THE CODE!!!");
	}
	return;	
}
trigger_error("HERE'S MY ERROR", E_USER_NOTICE);



<?php

function myCount()
{
	static $results = null;
	if($results ==null){
		// calculate
		$results = 'results';
	}

	return $results;
	
}

myCount();
myCount();
myCount();
myCount();

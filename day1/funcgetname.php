<?php
echo getName('kimsal','michael','g');
echo getName('kimsal','JOE');

assert('Michael G. Kimsal' == getName('kimsal','michael','g'));
assert('Joe Kimsal' == getName('kimsal','JOE') );
assert('Michael G. Kimsal' == getName('kimsal','MICHAEL','gunter'));


function getName($last, $first, $mi='')
{
	if($mi!='')
	{
		$mi = " ".substr($mi,0,1).". ";
	} else { 
		$mi = " ";
	}
	$name = ucwords(strtolower("$first$mi$last"));
	return $name;
}

function getName2($lastName, $firstName, $middle = null) {
    $return = ucfirst ( $firstName ); 
    if ($middle !== null) {
        $return .= ' ' . strtoupper ( $middle ) . '. ';
    }else {
    	$return .= " ";
    }
    
    $return .= ucfirst ( $lastName );
    return $return;
}

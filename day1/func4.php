<?php
function addParams($name, $phone)
//function addParams($ps)
{
	echo $ps['name'];
	echo $ps['phone'];
	$params = func_get_args();
	print_r($params);
	foreach($params as $val)
	{
		$total += $val;
	}
	return $total;
}

echo addParams(4,3,3,2,2,2,3,3);
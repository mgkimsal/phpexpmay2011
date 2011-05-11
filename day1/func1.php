<?php

function foobar()
{
	echo "www\n";
}
function getTime()
{
	return time();
}

foobar();

$time = getTime();
echo $time;
<?php

interface phone {
	 function makeCall();
	 function receiveCall();
}
interface emailer {
	function sendEmail();
	function receiveEmail();
}
interface camera {
	function takePicture();
	function showPicture();
}

class mobilephone implements phone {
	function makeCall() { }
	function receiveCall() { }
}

class smartphone implements phone, camera {
	function makeCall() { }
	function receiveCall() { }
	function takePicture() { }
	function showPicture() { }
}
// or

class superphone extends smartphone implements emailer {
	function sendEmail() { }
	function receiveEmail() { }	
}
class automobile implements phone {
		function makeCall() { }
	function receiveCall() { }
	
}

$x = new superphone();
$j = new smartphone();
$d = new mobilePhone();

function makeCall(Phone $p)
{
	$p->makeCall();
}
function sendEmail(Emailer $e)
{
	$e->receiveEmail();
}
function useSuperPhone(superphone $s)
{
}

function callUsers(Array $users) 
{
	
}


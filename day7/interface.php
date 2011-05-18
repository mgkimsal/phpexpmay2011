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
	function takePicture() { echo "took picture\n"; }
	function showPicture() { }
}






// or
class iPhone extends smartphone implements emailer {
	function sendEmail() { }
	function receiveEmail() { }	
}





class automobile implements phone {
	function makeCall() { }
	function receiveCall() { }	
}

$iphone = new iPhone();
$j = new smartphone();
$d = new mobilePhone();

function takePic(Camera $camera)
{
	$camera->takePicture();
}

takePic($iphone);

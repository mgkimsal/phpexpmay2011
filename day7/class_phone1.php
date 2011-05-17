<?php

class mobilePhone {
	
	public $phoneNumber = "9195555555";
	public $phoneNumbers = array();
	public $isMuted = "n";
	public $manufacturer = "KimsalCo";
	
	
	public function call() { 
	// initiate a call	
	}
	
	public function hangup() { 
	// hang up the call	
	}
	
	public function toggleMute() { 
	// toggle the mute state	
	}
	
	public function __construct() { 
		echo "I'm constructing a mobile phone\n";	
	}
}

$phone1 = new mobilePhone();
$phone1->phoneNumber = "9194558488";

$phone2 = new mobilePhone();
$phone2->phoneNumber = "9198675309";

echo $phone1->phoneNumber."\n";
echo $phone2->phoneNumber."\n";
?>

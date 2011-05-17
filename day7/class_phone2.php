<?php

class mobilePhone {
	
	public $phoneNumber = "9195555555";
	public $phoneNumbers = array();
	public $isMuted = "n";
  	public $callState = 'hungup';
	public $manufacturer = "KimsalCo";
	
	private function call($number) { 
	// initiate a call	
    $this->callState = 'calling';
	}
	
	public function hangup() { 
	// hang up the call	
    $this->callState = 'hungup';
	}
	
	public function toggleMute() { 
	  // toggle the mute state	
    $this->isMuted = ($this->isMuted=='n') ? "y" : "n";
	}
	
	public function __construct() { 
//		echo "I'm constructing a mobile phone\n";	
	}
	
	final public function dialOut($number)
	{
  // let's log the number being dialed for 
  // NSA requirements
  // $log = NSA::getLogger();
  // $log->log("dialing $number");
  		$this->call($number);		
	}
}

class fooPhone extends mobilePhone {
  public $manufacturer = "FooBarCo";
  public function dialOut($number)
  {
	
  }
}

$phone1 = new mobilePhone();
$phone1->phoneNumber = "9194558488";

$phone2 = new fooPhone();
$phone2->phoneNumber = "9198675309";

echo $phone1->dialOut("919 555 1212");
echo $phone2->dialOut("919 555 1212");
?>

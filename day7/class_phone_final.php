<?php
class mobilePhone {
	public $isMuted = "n";
	public $callState = 'hungup';
	
	public function call() { 
	    $this->callState = 'calling';
	}
	
	public function hangup() { 
	    $this->callState = 'hungup';
	}
	
	public function toggleMute() { 
	    $this->isMuted = 
	    		($this->isMuted=='n') ? "y" : "n";
	}
}
class lockedPhone extends mobilePhone{
	final public function call()
	{
		$this->callState = 'calling';
	}
}
class unlockedPhone extends mobilePhone{
	public function call()
	{
		$this->callState = 'calling';
		$this->customHooks();
	}
	// nothing here right now
	public function customHooks()
	{
	}
	
}
class fooPhone extends unlockedPhone {
	public function customHooks()
	{
		echo "Performing custom 
		unlocked hooks!\n";
		// play my ringtone
		// log call
		// send GPS to my server
	}
}

$phone1 = new lockedPhone();
$phone1->phoneNumber = "9194558488";

$phone2 = new fooPhone();
$phone2->phoneNumber = "9198675309";

echo $phone1->call()."\n";
echo $phone2->call()."\n";

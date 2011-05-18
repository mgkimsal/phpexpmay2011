<?php
interface phone {
	  function makeCall();
	  function receiveCall();

}
abstract class genericphone {
	public $id = "generic";
	public function showManufacturerId() { 
		echo $this->id;
	}
	abstract function setMfgId($id);
}

class mobilePhone extends genericphone implements phone {
	public $id ="kimsalco";
	function makeCall() { }
	function receiveCall() { }
	function setMfgId($id) { }	
}
$d = new mobilePhone();
$d->showManufacturerId();

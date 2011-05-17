<?php

abstract class phone {
	public $id = "generic";
	function showManufacturerId() { 
		echo $this->id;
	}
	protected abstract function makeCall();
	protected abstract function receiveCall();
}

class mobilePhone extends phone {
	public $id ="kimsalco";
	function makeCall() { }
	function receiveCall() { }	
}
$d = new mobilePhone();
$d->showManufacturerId();

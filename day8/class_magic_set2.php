<?php
error_reporting(E_ALL);
class vehicle {

	public $foo;
	
	private $_array = array();
	public function __set($name, $val) {
		echo "seting $name to $val\n";
		$this->_array[$name] = $val;
	}
	public function __get($name) {
		echo "getting $name\n";
		return $this->_array[$name];
	}
	
	public function __call($methodName, $args)
	{
		echo "called method $methodName with args = "; print_r($args);
	}
}

$v = new vehicle();
$v->setMaxSpeed(5);

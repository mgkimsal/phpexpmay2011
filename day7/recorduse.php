<?php
class base {
	static $_usage = array();
	public function __construct() {
		$d = debug_backtrace();	
		$info['class'] = $d[1]['class'];
		$info['line'] = $d[1]['line'];
		$info['file'] = $d[1]['file'];
		self::$_usage[] = $info;
	}	
	static function getUsage() {
		return self::$_usage;
	}
	static function showUses(){
		$u = self::$_usage;
		foreach($u as $use) {
			echo "class ".$use['class']." used from ";
			echo $use['line']." file ".$use['file']."\n";
		}
	}
}
class worker extends base {
	public function __construct(){
		parent::__construct();
	}
}

$u = new worker();
$t = new worker();

worker::showUses();

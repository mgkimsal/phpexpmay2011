<?php
class user {
	public $name = "mike";
	protected $level = "user";
	private $password = "mypass";
	public function showLevel() { 
		echo "You are level ".$this->level."\n";
	}
	protected function showPass() { 
		echo "your level is ".$this->level."\n";
		echo "Password is ".$this->password."\n";
	}
}
class adminUser extends user {
	public $level = "admin level";
	private $password = "adminpass";
	public function showPass() { 
		parent::showPass();
		echo "Password is ".$this->password."\n";
	}
}
//$u = new user();
//echo $u->password."\n";  // generates a fatal error
//$u->showPass();
$admin = new adminUser();
$admin->showPass();

<?php
class user {

	public $name = "mike";
	protected $level = "user";
	private $password = "mypass";

	public function showLevel() { 
		echo "You are level ".$this->level."\n";
	}
	public function showPass() { 
		echo "class is ".get_class($this)."\n";
		echo "Password is ".$this->password."\n";
	}
}

class adminUser extends user {
	private $password = "adminpass";
}

//$u = new user();
//echo $u->password."\n";  // generates a fatal error
//$u->showPass();
$admin = new adminUser();
$admin->showPass();

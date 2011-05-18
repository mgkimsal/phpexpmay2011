<?php
class user {
	protected $level = "user";
	public function showLevel() { 
		echo "You are level ".$this->level."\n";
	}
	public function getLevel() {
		return $this->level;
	}
}
class adminUser extends user {
//	protected $level = "admin";
// we can always make subclassed properties 
// *more* public/visible, but not less
//	public $level = "speruser";
	
	public function getLevel() { 
		$this->level = parent::getLevel();
		echo $this->level;
	}
}

$u = new user();
//echo $u->level."\n";
//$u->showLevel();
//die();
$admin = new adminUser();
//$admin->showLevel();
echo $admin->getLevel();
echo $admin->level;

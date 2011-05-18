<?php
const TYPE_GENERIC = 5;

class User {
	const TYPE_GUEST = 1;
	const TYPE_USER = 2;	
	const TYPE_ADMIN = 3;
	public $type;
	function __construct($type) {
		$this->type = $type;
	}
}
$user = new User(User::TYPE_GUEST);
//echo "generic value is ". TYPE_GENERIC."\n";
if ($user->type === User::TYPE_GUEST) {
	echo 'User is a guest';
}

if(defined('TYPE_GENERIC')){
	echo "\ngeneric is defined";
}
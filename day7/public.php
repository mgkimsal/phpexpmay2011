<?php
class user {

	public $name = "mike";
	public $level = "user";

}

class adminUser extends user {
	public $level = "admin";
}

$u = new user();
echo $u->level."\n";

$admin = new adminUser();
echo $admin->level."\n";

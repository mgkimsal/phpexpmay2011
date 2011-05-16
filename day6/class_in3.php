<?php
class User {
	static $datapath = "/tmp/users/";
	public function getPath() {
		echo static::$datapath;
	}
}
class Student extends User {
	static $datapath = "/tmp/students/";
	public $type = "student";
}
class Teacher extends User {
	static $datapath = "/tmp/teachers/";
	public $type = "teacher";
}

$s = new Teacher();
$s->getPath(); // what will get output here?

<?php
class User {
	public $type = "user";
	public function showType() {
		echo $this->type;
	}
}
class Student extends User {
	public $type = "student";
}
class Teacher extends User {
	public $type = "teacher";
}
$s = new Student();
$s->showType();

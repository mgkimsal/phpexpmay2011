<?php
class User {
	public $type = "user";
	public function showType() {
		echo $this->type;
	}
}
class Student extends User {
	public $type = "student";
	public $grade = 0;
	public function __construct($grade)
	{
		$this->grade = $grade;
	}
	public function showType()
	{
		echo "Student in grade: ".$this->grade;
	}
}
class Teacher extends User {
	public $type = "teacher";
}
class Junior extends Student {
	public $type = "junior";
}

$s = new Student(4);
$s->showType();

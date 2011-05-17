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
	public function __construct($grade=null)
	{
		if($grade!=null){
			$this->grade = $grade;
		}
	}
	public function showType()
	{
		echo "Student in grade: ".$this->grade."\n";
	}
}
class Teacher extends User {
	public $type = "teacher";
}
class Junior extends Student {
	public $grade = 11;
	public $type = "junior";
}
class Freshman extends Student {
	public $grade = 9;
	public $type = "freshman";
}
class Sophomore extends Student {
	public $grade = 10;
	public $type = "sophomore";
}
class Senior extends Student {
	public $grade = 12;
	public $type = "senior";
}

$s = new Student(4);
$s->showType();
$f = new Freshman();
$f->showType();

<?php
class assignment {
	
	public $value;
	
	public function __toString()
	{
		return serialize($this);
		if($this->value>90) { 
			return "A";
		}
		if($this->value>80)
		{
			return "B";
		}
		if($this->value>70)
		{
			return "C";
		}
		return "FAILED!";
	}
	
}
$a = new assignment();
$a->value = 72;

echo $a;die();
$t =  $a." Hello";
echo $t;
<?php

class user {
	
	public function __construct()
	{
		$x = func_get_args();
		if(count($x)==1)
		{
			echo "1 args\n";
//			$this->subconstruct1();	
		}
		if(count($x)==2)
		{
			echo "2 args";
//			$this->subconstruct2();	
		}
		
	}
	/** 
	 * not possible
	 *
	public function __construct($name, $email)
	{
		
	}
	
	*/
}

$u = new user("mike");

$u2 = new user("mike","mgkimsal@gmail.com");

<?php
class demo4 {
	/**
	 * 
	 * @var string
	 */
	public $name;
	
	/**
	 * 
	 * @var int
	 */
	public $id;
	
	/**
	 * @
	 * @param string $name
	 * @param int $id
	 * @return boolean
	 */
	public function foo($name, $id)
	{
		return true;
	}
	
}
$d = new demo4();
$d->
<?php
error_reporting(E_ALL & E_DEPRECATED);
class user {

	public $name;
	
  function __construct($name)
  {
  	$this->name = $name;
    echo "i'm building a user\n";
  }

  function saymyname()
  {
  	echo "my name is ".$this->name;
  }

}

$u = new user("mike");
$u->saymyname();
$u2 = new user("mark");
$u2->saymyname();
var_dump($u2);


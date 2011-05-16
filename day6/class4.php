<?php

class user {

  function __construct()
  {
    echo "I'm building a user\n";
  }

  function sayDate()
  {
    echo "Current date is ".date("m/d/Y")."\n";
  }

  function say($string = "")
  {
    echo "The user said $string\n";
  }

	function __destruct(){
		echo "I'm being destructed!\n";
	}
}

$u = new user();
$u->say("Howdy there!");
unset($u);
echo "HELLO\n";

/**
 * Java-esque version
User u = new User();
u.say("Hello");
*/
<?php
date_default_timezone_set("America/New_York");

class user {

	static $fileHandle;
	public $name;

  function openFile($f)
  {
  	self::$fileHandle = fopen($f,"w");
  }

  function printFileInfo()
  {
  	echo self::$fileHandle."\n";
  }
  
  static function showDate()
  {
  	echo date("m/d/Y")."\n";
  }
}

$u = new user();
$u->openFile("/tmp/foo");
$u2 = new user();
$u2->openFile("/tmp/foo");
$u2->printFileInfo();
$u->printFileInfo();
user::showDate();





//$u->showDate(); // confusingly, this also works

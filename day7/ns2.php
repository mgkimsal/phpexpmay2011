<?php

function __autoload($f) {
//	die("trying to load class $f");
	$t = str_replace("\\","/",$f);
	echo "going to include $t.php\n";
	include("$t.php");
//	die();
}
?>
<?php 
use com\kimsal as lib;

lib\foo::showFoo("my name is mike");
?>
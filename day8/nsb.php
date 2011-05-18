<?php
//use com\kimsal;
include("nsa.php");
?>
<?php 
\com\kimsal\foo::showFoo("bar");
use \com\kimsal as mgk;
use \com\kimsal\foo as mgkfoo;
mgkfoo::showFoo("test");

mgk\foo::showFoo("my name is mike");

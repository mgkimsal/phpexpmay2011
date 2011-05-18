<?php
namespace com\kimsal;

class foo {
	static function showFoo($text="foo") {
		echo "Foo text was :".$text."\n";
	}
	static function showBar($text="bar") {
		echo "Bar text was :".$text."\n";
	}
	
}
/*
foo::showFoo();
\com\kimsal\foo::showBar('hey');
*/
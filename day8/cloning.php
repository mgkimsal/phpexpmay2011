<?php
class refclass {
	public $id=2;
}

$a = new refclass();
$a->id = 6;
$c = clone $a;
assert($c==$a);
assert($c!==$a);
assert($c->id==6);
assert($a!==$c);
<?php
class refclass {
	public $id;
}

$a = new refclass();
$a->id = 6;
$c = clone $a;
assert($c==$a);
assert($c!==$a);
$c->id = 6;
assert($a==$c);
assert($a!==$c);
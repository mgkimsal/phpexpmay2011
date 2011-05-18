<?php
class refclass {
	public $id;
}

$a = new refclass();
$b = new refclass();
$c = $a;
assert($a==$b);
assert($a!==$b);
assert($c===$a);
$c->id = 5;
assert($a->id==5);
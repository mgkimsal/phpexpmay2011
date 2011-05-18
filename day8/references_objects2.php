<?php
class refclass {
	public $id;
}
function myfunction(refclass $r)
{
	$r->id = 7;
}
$t = new refclass();
$t->id = 2;
assert($t->id==2);
myfunction($t);
assert($t->id==7);
<?php
namespace com\kimsal\lib2;

include("namespace1.php");
include("namespace2.php");

use com\kimsal\lib1\sample as lib1Sample;

// this will call com\kimsal\lib2 version
// because that's the current namespace 
// defined on line 2
showDate();

// use the lib1Sample alias
$s = new lib1Sample();
$s->taste();

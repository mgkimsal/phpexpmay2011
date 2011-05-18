<?php
namespace com\kimsal\lib2;

include("namespace1.php");
include("namespace2.php");

// this will call com\kimsal\lib2 version
// because that's the current namespace 
// defined on line 2
showDate();

// to get at the other one we have to
// be explicit
\com\kimsal\lib1\showDate();
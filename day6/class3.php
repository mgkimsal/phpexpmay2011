<?php
error_reporting(E_ALL);
class user {

  function __construct()
  {
    echo "I'm building a user\n";
  }

  function sayTime()
  {
    echo "Current date is ".time()."\n";
  }
}

$u = new user();
$u->sayTime();
$u->sayTime();

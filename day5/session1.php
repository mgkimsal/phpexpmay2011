<?php 
session_start();
echo $_SESSION['time']."<BR>\n";
$_SESSION['time'] = time();
echo "id=".session_id();
//session_destroy();



?>
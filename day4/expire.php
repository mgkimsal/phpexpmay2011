<?php
date_default_timezone_set("America/New_York");

header('Expires: '.gmdate("D, d M Y H:i:s", 
$entry->modified+31536000) . " GMT"); 
header("Pragma: cache"); 
header("Cache-Control: public, must-revalidate, max-age=0"); 
?>
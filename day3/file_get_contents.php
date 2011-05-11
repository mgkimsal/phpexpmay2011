<?php 
$data = file_get_contents("./file_get_contents.php");
echo $data;

$data = file_get_contents("http://www.yahoo.com");
echo $data;

?>
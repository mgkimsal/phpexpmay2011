<?php
date_default_timezone_set("America/New_York");
//$time = 1195248471; 
$eTag = md5("test2"); 
$noneMatch = isset($_SERVER['HTTP_IF_NONE_MATCH'])? $_SERVER['HTTP_IF_NONE_MATCH']:''; 
if ($noneMatch == $eTag) { 
 header('304 Not Modified', true, 304); 
 exit; 
} 
header("ETag: $eTag");
?>
We're sending down data at <?php echo date("h:i:s");?>
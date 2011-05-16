<?php
date_default_timezone_set("America/New_York");
if(@$_SERVER['HTTP_IF_MODIFIED_SINCE']!='')
{
	$h = strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']);
//} else { 
//	$h = time();
}
$time = time()-3;
if ($h > $time) { 
	header('304 Not Modified', true, 304); 
	exit; 
} 
echo $h."\n".$time;
header('Last-Modified: '. date("m/d/Y h:i:s", time()));
?>
We last updated on <?php echo date("h:i:s");?>
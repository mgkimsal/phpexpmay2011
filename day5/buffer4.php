<?php
ob_start("gzhandler");
ob_start();
echo 'wwww';
ob_start();
echo 'ttt';
echo "\nWe're ".ob_get_level()." levels deep";
$t = ob_get_clean();
$y = ob_get_clean();
echo $t;
echo "\n";
echo $y;
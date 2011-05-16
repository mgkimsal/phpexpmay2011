<?php
ob_start();
echo 'Original data here';
$t = ob_get_clean();
echo "This was sent out at the end\n";
echo $t;
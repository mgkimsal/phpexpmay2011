<?php 
$f = fopen("http://yahoo.com/","r");
print_r(stream_get_meta_data($f));

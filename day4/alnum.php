<?php
$string = "!@#*&^fff";

if(ctype_punct($string)) { 
	echo "is punct";
}else {
	echo "isn't alnum";
}
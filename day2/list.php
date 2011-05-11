<?php

$scores = array(14,19,11,13,4,8);
rsort($scores);

list($first, $second, $third) = $scores;

echo "first = $first\n";
echo "second = $second\n";
echo "third is $third\n";
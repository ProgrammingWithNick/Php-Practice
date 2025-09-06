<?php

$a = 25;
$b = 78;
$c = 15;

echo "Numbers are: $a, $b, $c <br>";

$max = $a;
if($b > $max) $max = $b;
if($c > $max) $max = $c;

$min = $a;
if($b < $min) $min = $b;
if($c < $min) $min = $c;

echo "Maximum Number: $max <br>";
echo "Minimum Number: $min <br>";
?>

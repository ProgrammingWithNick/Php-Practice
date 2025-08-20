<?php
$a = 10;
$b = 5;

echo "a = $a, b = $b<br>";

// Arithmetic
echo "Add: " . ($a + $b) . "<br>";
echo "Subtract: " . ($a - $b) . "<br>";

// Assignment
$c = $a;
$c += $b;
echo "Assignment (c += b): $c<br>";

// Comparison
echo "Is a equal to b? " . (($a == $b) ? "Yes" : "No") . "<br>";

// Logical
echo "a > 5 AND b < 10? " . (($a > 5 && $b < 10) ? "True" : "False") . "<br>";
?>

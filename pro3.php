<?php

$a = 20;
$b = 10;

echo "<h2>Operators in PHP</h2>";
echo "Values: a = $a, b = $b <br><br>";

// 1. Arithmetic Operators
echo "<b>Arithmetic Operators:</b><br>";
echo "a + b = " . ($a + $b) . "<br>";
echo "a - b = " . ($a - $b) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br>";
echo "a % b = " . ($a % $b) . "<br><br>";

// 2. Relational Operators
echo "<b>Relational Operators:</b><br>";
echo "a == b : " . var_export($a == $b, true) . "<br>";
echo "a != b : " . var_export($a != $b, true) . "<br>";
echo "a > b  : " . var_export($a > $b, true) . "<br>";
echo "a < b  : " . var_export($a < $b, true) . "<br><br>";

// 3. Logical Operators
echo "<b>Logical Operators:</b><br>";
echo "(a > 15 && b < 15) : " . var_export(($a > 15 && $b < 15), true) . "<br>";
echo "(a > 25 || b < 15) : " . var_export(($a > 25 || $b < 15), true) . "<br>";
echo "!(a == b) : " . var_export(!($a == $b), true) . "<br><br>";

// 4. Assignment Operators
echo "<b>Assignment Operators:</b><br>";
$c = $a;
echo "c = a → c = $c <br>";
$c += $b;
echo "c += b → $c <br>";
$c -= $b;
echo "c -= b → $c <br>";
$c *= $b;
echo "c *= b → $c <br>";
$c /= $b;
echo "c /= b → $c <br>";
?>

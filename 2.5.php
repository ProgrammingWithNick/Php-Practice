<!-- 2.5 Write a PHP code for Type casting with settype, gettype functions. -->

<?php
echo "<h2>Type Casting Demo</h2>";

$val = "100";   // string value
echo "Original: $val (Type: " . gettype($val) . ")<br><br>";

// Change string to integer
settype($val, "integer");
echo "After settype to integer: $val (Type: " . gettype($val) . ")<br><br>";

// Change integer to float
settype($val, "float");
echo "After settype to float: $val (Type: " . gettype($val) . ")<br><br>";

// Change float to boolean
settype($val, "boolean");
echo "After settype to boolean: $val (Type: " . gettype($val) . ")<br><br>";

// Now explicit casting
$num = 50.75;
echo "Explicit casting of $num:<br>";
echo "(int) → " . (int)$num . "<br>";
echo "(string) → " . (string)$num . "<br>";
echo "(bool) → " . (bool)$num . "<br>";
?>

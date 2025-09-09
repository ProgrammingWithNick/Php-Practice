<?php

$month = date("n");

echo "<h2>Current Month</h2>";

// ---- Using if..else ----
echo "<b>Using if..else:</b><br>";

if($month == 1) {
    echo "January<br>";
} elseif($month == 2) {
    echo "February<br>";
} elseif($month == 3) {
    echo "March<br>";
} elseif($month == 4) {
    echo "April<br>";
} elseif($month == 5) {
    echo "May<br>";
} elseif($month == 6) {
    echo "June<br>";
} elseif($month == 7) {
    echo "July<br>";
} elseif($month == 8) {
    echo "August<br>";
} elseif($month == 9) {
    echo "September<br>";
} elseif($month == 10) {
    echo "October<br>";
} elseif($month == 11) {
    echo "November<br>";
} else {
    echo "December<br>";
}

// ---- Using switch case ----
echo "<br><b>Using switch case:</b><br>";

switch($month) {
    case 1: echo "January"; break;
    case 2: echo "February"; break;
    case 3: echo "March"; break;
    case 4: echo "April"; break;
    case 5: echo "May"; break;
    case 6: echo "June"; break;
    case 7: echo "July"; break;
    case 8: echo "August"; break;
    case 9: echo "September"; break;
    case 10: echo "October"; break;
    case 11: echo "November"; break;
    case 12: echo "December"; break;
    default: echo "Invalid Month"; 
}
?>

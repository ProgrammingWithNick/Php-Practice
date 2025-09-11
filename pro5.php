<?php

echo "<b>For Loop:</b><br>";
for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><br>";

echo "<b>Foreach Loop:</b><br>";
$numbers = [5, 6, 7, 8, 9, 10];

foreach ($numbers as $num) {
    echo $num . " ";
}
?>

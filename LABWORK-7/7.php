<?php
$GLOBALS['counter'] = 0;
function increment() {
    $GLOBALS['counter']++;
}
increment();
increment();
echo "Counter: " . $GLOBALS['counter'];  // Output: 2
?>

<?php
session_start();
$timeout = 300; // 5 minutes

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    session_unset();
    session_destroy();
    echo "Logged out due to inactivity.";
} else {
    $_SESSION['last_activity'] = time();
    echo "Active session.";
}
?>

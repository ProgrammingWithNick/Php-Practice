<?php
$ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$method = $_SERVER['REQUEST_METHOD'] ?? 'Unknown';
echo "Your IP: " . htmlspecialchars($ip) . "<br>";
echo "Request Method: " . htmlspecialchars($method);
?>

<?php
// Suppose environment is set in server or .env file as 'development' or 'production'
$env = $_ENV['APP_ENV'] ?? 'development';

if ($env === 'production') {
    $db = "Prod DB config";
} else {
    $db = "Dev DB config";
}

echo "Current DB config: $db";
?>

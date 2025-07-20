<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'trading_signals');
define('DB_USER', 'root');
define('DB_PASS', '');

// Email configuration
define('ADMIN_EMAIL', 'admin@yoursite.com');
define('SITE_NAME', 'AlphaSignal');

// File paths
define('SUBSCRIBER_COUNT_FILE', __DIR__ . '/subscriber_count.txt');

// Initialize subscriber count if file doesn't exist
if (!file_exists(SUBSCRIBER_COUNT_FILE)) {
    file_put_contents(SUBSCRIBER_COUNT_FILE, '0');
}
?>
<?php
/**
 * Configuration File for AI Trading Signals
 * 
 * Database and application settings
 */

// Strict type checking
declare(strict_types=1);

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Database Configuration
define('DB_HOST', 'localhost'); // Usually 'localhost' on Hostinger
define('DB_USER', 'u834808878_Dbaccess25'); // Replace with your Hostinger DB username
define('DB_PASS', 'Ossouka@1968'); // Replace with your Hostinger DB password
define('DB_NAME', 'u834808878_dbSignals'); // Your database name

// Application Settings
define('SITE_NAME', 'AI Trading Signals');
define('SITE_URL', 'https://yourdomain.com'); // Replace with your actual domain
define('SITE_EMAIL', 'no-reply@yourdomain.com'); // Replace with your email
define('ADMIN_EMAIL', 'admin@yourdomain.com'); // Replace with admin email

// Security Configuration
define('SECRET_KEY', 'your_random_secret_key_here'); // Generate with bin2hex(random_bytes(32))
define('TOKEN_EXPIRE', 3600); // 1 hour in seconds

// Path Configuration
define('BASE_PATH', __DIR__ . '/..');
define('LOG_PATH', BASE_PATH . '/logs/app.log');

// Mail Configuration (for PHPMailer)
define('SMTP_HOST', 'your_smtp_host'); // e.g., smtp.hostinger.com
define('SMTP_PORT', 587); // 587 for TLS, 465 for SSL
define('SMTP_USER', 'no-reply@yourdomain.com');
define('SMTP_PASS', 'your_email_password');
define('SMTP_SECURE', 'tls'); // 'tls' or 'ssl'

// Timezone Settings
date_default_timezone_set('UTC');

// Maintenance Mode (set to true when doing updates)
define('MAINTENANCE_MODE', false);

// CSRF Protection (enabled by default)
define('CSRF_PROTECTION', true);

// Session Configuration
ini_set('session.cookie_httponly', '1');
ini_set('session.cookie_secure', '1'); // Enable when using HTTPS
ini_set('session.use_strict_mode', '1');
ini_set('session.cookie_samesite', 'Strict');
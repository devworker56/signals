<?php
// SMTP Configuration
define('SMTP_HOST', 'smtp.yourdomain.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'no-reply@yourdomain.com');
define('SMTP_PASS', 'yourpassword');
define('SMTP_SECURE', 'tls'); // tls or ssl

// For production, consider using PHPMailer
require_once 'path/to/PHPMailer/src/PHPMailer.php';
require_once 'path/to/PHPMailer/src/SMTP.php';
require_once 'path/to/PHPMailer/src/Exception.php';
?>
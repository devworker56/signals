<?php
require_once 'config.php';

function sendSubscriptionNotification($name, $email, $subscriberCount) {
    $subject = "New Subscription Interest - " . SITE_NAME;
    $message = "
        <html>
        <head>
            <title>New Subscription Interest</title>
        </head>
        <body>
            <h2>New Subscription Interest</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Total Subscribers:</strong> $subscriberCount</p>
            <p>This person has shown interest in the trading signals service.</p>
        </body>
        </html>
    ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . SITE_NAME . " <no-reply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    return mail(ADMIN_EMAIL, $subject, $message, $headers);
}
?>
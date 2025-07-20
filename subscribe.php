<?php
require_once 'includes/config.php';
require_once 'includes/mailer.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $firstName = $_POST['first_name'] ?? '';
    $lastName = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $experience = $_POST['experience'] ?? '';
    
    $name = trim("$firstName $lastName");
    
    // Increment subscriber count
    $count = (int)file_get_contents(SUBSCRIBER_COUNT_FILE);
    $count++;
    file_put_contents(SUBSCRIBER_COUNT_FILE, $count);
    
    // Send email notification to admin
    sendSubscriptionNotification($name, $email, $count);
    
    // Redirect to coming soon page with subscriber count
    header("Location: coming-soon.php?count=$count");
    exit;
} else {
    // If someone tries to access this page directly, redirect to pricing
    header("Location: pricing.php");
    exit;
}
?>
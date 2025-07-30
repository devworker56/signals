<?php
require_once(__DIR__ . '/db.php');
require_once(__DIR__ . '/../config/mail-config.php');

function sendAdminNotification($subscriberId, $subscriberName, $subscriberEmail) {
    try {
        $db = new Database();
        $totalSubscribers = $db->getConnection()->query("SELECT COUNT(*) as count FROM subscribers")->fetch_assoc()['count'];
        $db->closeConnection();
        
        $to = ADMIN_EMAIL;
        $subject = "New Subscription Attempt - AI Trading Signals";
        
        $message = "A new user has attempted to subscribe to your service:\n\n";
        $message .= "Subscriber ID: $subscriberId\n";
        $message .= "Name: $subscriberName\n";
        $message .= "Email: $subscriberEmail\n\n";
        $message .= "Total subscribers: $totalSubscribers\n\n";
        $message .= "Date: " . date('Y-m-d H:i:s') . "\n";
        
        $headers = "From: " . SITE_EMAIL . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        if (!mail($to, $subject, $message, $headers)) {
            error_log("Failed to send admin notification email");
        }
        
        // Log the email
        $db = new Database();
        $db->getConnection()->query("INSERT INTO email_log (subscriber_id, email_type, status, subject) VALUES ($subscriberId, 'admin_alert', 'sent', '$subject')");
        $db->closeConnection();
        
    } catch (Exception $e) {
        error_log("Error in sendAdminNotification: " . $e->getMessage());
    }
}

function sendUserConfirmation($subscriberName, $subscriberEmail) {
    try {
        $subject = "Your AI Trading Signals Subscription";
        
        $message = "Dear $subscriberName,\n\n";
        $message .= "Thank you for your interest in our AI-powered trading signals service.\n\n";
        $message .= "We're currently finalizing our platform to ensure the highest quality service. ";
        $message .= "You'll be contacted as soon as we're ready to launch.\n\n";
        $message .= "We appreciate your patience and look forward to serving you soon!\n\n";
        $message .= "Best regards,\n";
        $message .= "The AI Trading Signals Team";
        
        $headers = "From: " . SITE_EMAIL . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        if (!mail($subscriberEmail, $subject, $message, $headers)) {
            error_log("Failed to send user confirmation email to $subscriberEmail");
            return false;
        }
        
        // Log the email
        $db = new Database();
        $subscriberId = $db->getConnection()->query("SELECT id FROM subscribers WHERE email = '" . $db->sanitize($subscriberEmail) . "'")->fetch_assoc()['id'];
        $db->getConnection()->query("INSERT INTO email_log (subscriber_id, email_type, status, subject) VALUES ($subscriberId, 'service_unavailable', 'sent', '$subject')");
        $db->closeConnection();
        
        return true;
        
    } catch (Exception $e) {
        error_log("Error in sendUserConfirmation: " . $e->getMessage());
        return false;
    }
}

function getClientIP() {
    $ip = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return filter_var($ip, FILTER_VALIDATE_IP) ? $ip : '';
}

function logAdminAction($adminId, $action, $description = '') {
    try {
        $db = new Database();
        $ip = getClientIP();
        $stmt = $db->getConnection()->prepare("INSERT INTO admin_logs (admin_id, action, description, ip_address) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $adminId, $action, $description, $ip);
        $stmt->execute();
        $stmt->close();
        $db->closeConnection();
    } catch (Exception $e) {
        error_log("Error logging admin action: " . $e->getMessage());
    }
}
?>
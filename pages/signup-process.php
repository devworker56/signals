<?php
require_once(__DIR__ . '/../includes/functions.php');

// Validate request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: signup.php");
    exit();
}

// Validate required fields
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['terms'])) {
    header("Location: signup.php?error=missing_fields");
    exit();
}

// Sanitize and validate email
$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
if (!$email) {
    header("Location: signup.php?error=invalid_email");
    exit();
}

try {
    $db = new Database();
    
    // Check if email already exists
    $stmt = $db->getConnection()->prepare("SELECT id FROM subscribers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    if ($stmt->get_result()->num_rows > 0) {
        $stmt->close();
        $db->closeConnection();
        header("Location: coming-soon.php?existing=1");
        exit();
    }
    $stmt->close();
    
    // Record subscription
    $ip = getClientIP();
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $subscriberId = $db->recordSubscription(
        $_POST['name'],
        $email,
        $_POST['company'] ?? null,
        $ip,
        $userAgent
    );
    
    $db->closeConnection();
    
    if ($subscriberId) {
        // Send notifications
        sendAdminNotification($subscriberId, $_POST['name'], $email);
        sendUserConfirmation($_POST['name'], $email);
        
        // Redirect to thank you page
        header("Location: coming-soon.php");
        exit();
    } else {
        header("Location: signup.php?error=db_error");
        exit();
    }
    
} catch (Exception $e) {
    error_log("Signup process error: " . $e->getMessage());
    header("Location: signup.php?error=server_error");
    exit();
}
?>
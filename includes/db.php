<?php
require_once(__DIR__ . '/../config/config.php');

class Database {
    private $connection;
    
    public function __construct() {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if ($this->connection->connect_error) {
            error_log("Database connection failed: " . $this->connection->connect_error);
            throw new Exception("Database connection failed");
        }
        
        $this->connection->set_charset("utf8mb4");
    }
    
    public function getConnection() {
        return $this->connection;
    }
    
    public function closeConnection() {
        $this->connection->close();
    }
    
    // Sanitize input data
    public function sanitize($data) {
        return $this->connection->real_escape_string(trim($data));
    }
    
    // Record new subscription
    public function recordSubscription($name, $email, $company = null, $ip = null, $userAgent = null) {
        $name = $this->sanitize($name);
        $email = $this->sanitize($email);
        $company = $company ? $this->sanitize($company) : null;
        $ip = $ip ? $this->sanitize($ip) : null;
        $userAgent = $userAgent ? $this->sanitize($userAgent) : null;
        
        $stmt = $this->connection->prepare("INSERT INTO subscribers (name, email, company, ip_address, user_agent) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $company, $ip, $userAgent);
        
        if (!$stmt->execute()) {
            error_log("Subscription recording failed: " . $stmt->error);
            $stmt->close();
            return false;
        }
        
        $subscriberId = $stmt->insert_id;
        $stmt->close();
        
        // Log the attempt
        $this->logSubscriptionAttempt($subscriberId, $ip, $userAgent);
        
        return $subscriberId;
    }
    
    // Log subscription attempt
    private function logSubscriptionAttempt($subscriberId, $ip, $userAgent) {
        $stmt = $this->connection->prepare("INSERT INTO subscription_attempts (subscriber_id, ip_address, user_agent) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $subscriberId, $ip, $userAgent);
        $stmt->execute();
        $stmt->close();
    }
    
    // Get all subscribers (for admin)
    public function getAllSubscribers($limit = 100) {
        $limit = (int)$limit;
        $result = $this->connection->query("SELECT * FROM subscribers ORDER BY signup_date DESC LIMIT $limit");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    // Verify admin credentials
    public function verifyAdmin($username, $password) {
        $username = $this->sanitize($username);
        $stmt = $this->connection->prepare("SELECT id, password_hash FROM admins WHERE username = ? LIMIT 1");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $admin = $result->fetch_assoc();
            if (password_verify($password, $admin['password_hash'])) {
                return $admin['id'];
            }
        }
        
        return false;
    }
}
?>
<?php
// Admin Dashboard Entry Point
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Set the default page to dashboard
header("Location: dashboard.php");
exit();
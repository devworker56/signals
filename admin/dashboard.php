<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

require_once('../../includes/db.php');
$db = new Database();
$subscribers = $db->getAllSubscribers();
$totalSubscribers = count($subscribers);
$db->closeConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - AI Trading Signals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .card-stat {
            transition: transform 0.3s ease;
        }
        .card-stat:hover {
            transform: translateY(-5px);
        }
        .recent-subscribers {
            max-height: 400px;
            overflow-y: auto;
        }
        .chart-container {
            position: relative;
            height: 300px;
        }
    </style>
</head>
<body class="admin-dashboard">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">AI Trading Signals - Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php"><i class="bi bi-speedometer2 me-1"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subscribers.php"><i class="bi bi-people me-1"></i> Subscribers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right me-1"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fw-bold">Dashboard Overview</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card card-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-white-50">Total Subscribers</h6>
                                <h2 class="mb-0"><?php echo $totalSubscribers; ?></h2>
                            </div>
                            <div class="icon-lg bg-white bg-opacity-10 rounded-circle">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="text-white-50 small">Since launch</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card card-stat bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-white-50">Active Trials</h6>
                                <h2 class="mb-0">0</h2>
                            </div>
                            <div class="icon-lg bg-white bg-opacity-10 rounded-circle">
                                <i class="bi bi-activity"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="text-white-50 small">Currently active</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card card-stat bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-uppercase text-white-50">Today's Signups</h6>
                                <h2 class="mb-0">0</h2>
                            </div>
                            <div class="icon-lg bg-white bg-opacity-10 rounded-circle">
                                <i class="bi bi-person-plus-fill"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="text-white-50 small">New today</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts and Recent Activity -->
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <h5 class="mb-0">Subscription Growth</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="subscriptionsChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <h5 class="mb-0">Recent Subscribers</h5>
                    </div>
                    <div class="card-body recent-subscribers">
                        <ul class="list-group list-group-flush">
                            <?php foreach (array_slice($subscribers, 0, 5) as $subscriber): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1"><?php echo htmlspecialchars($subscriber['name']); ?></h6>
                                    <small class="text-muted"><?php echo htmlspecialchars($subscriber['email']); ?></small>
                                </div>
                                <span class="badge bg-light text-dark"><?php echo date('M j', strtotime($subscriber['signup_date'])); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="subscribers.php" class="btn btn-sm btn-outline-primary w-100">View All Subscribers</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity Table -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <h5 class="mb-0">Recent Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Company</th>
                                        <th>Signup Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (array_slice($subscribers, 0, 5) as $subscriber): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($subscriber['name']); ?></td>
                                        <td><?php echo htmlspecialchars($subscriber['email']); ?></td>
                                        <td><?php echo $subscriber['company'] ? htmlspecialchars($subscriber['company']) : 'N/A'; ?></td>
                                        <td><?php echo date('M j, Y H:i', strtotime($subscriber['signup_date'])); ?></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Subscription Growth Chart
            const ctx = document.getElementById('subscriptionsChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'Subscription Attempts',
                        data: [12, 19, 15, 27, 22, 33, 41],
                        borderWidth: 2,
                        borderColor: '#0d6efd',
                        backgroundColor: 'rgba(13, 110, 253, 0.1)',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
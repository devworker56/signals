<?php 
$subscriberCount = isset($_GET['count']) ? (int)$_GET['count'] : 0;
require_once 'includes/header.php'; 
?>

<section class="py-5 min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="mb-5">
                    <i class="bi bi-tools display-1 text-warning"></i>
                </div>
                <h1 class="display-4 fw-bold mb-4">We're Not Quite Ready Yet</h1>
                <p class="lead text-muted mb-5">
                    Thank you for your interest in AlphaSignal! We're currently putting the finishing touches on our 
                    trading signals platform and aren't quite ready to launch.
                </p>
                
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-4">
                        <p class="mb-0">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            We've recorded your interest and will notify you as soon as we're live.
                        </p>
                        <p class="mb-0">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            You were subscriber <span class="badge bg-primary fs-5">#<?= $subscriberCount ?></span>.
                        </p>
                    </div>
                </div>
                
                <p class="text-muted mb-4">
                    In the meantime, feel free to explore our website to learn more about what we're building.
                </p>
                
                <a href="index.php" class="btn btn-primary btn-lg px-4 py-3">
                    <i class="bi bi-arrow-left me-2"></i>Return to Homepage
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
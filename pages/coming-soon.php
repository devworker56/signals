<?php 
require_once(__DIR__ . '/../includes/header.php');

$isExistingUser = isset($_GET['existing']);
?>

<div class="container py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <div class="mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#0d6efd" class="bi bi-hourglass-top" viewBox="0 0 16 16">
                    <path d="M2 14.5a.5.5 0 0 0 .5.5h11a.5.5 0 1 0 0-1h-1v-1a4.5 4.5 0 0 0-2.557-4.06c-.29-.139-.443-.377-.443-.59v-.7c0-.213.154-.451.443-.59A4.5 4.5 0 0 0 12.5 3V2h1a.5.5 0 0 0 0-1h-11a.5.5 0 0 0 0 1h1v1a4.5 4.5 0 0 0 2.557 4.06c.29.139.443.377.443.59v.7c0 .213-.154.451-.443.59A4.5 4.5 0 0 0 3.5 13v1h-1a.5.5 0 0 0-.5.5zm2.5-.5v-1a3.5 3.5 0 0 1 1.989-3.158c.533-.256 1.011-.79 1.011-1.491v-.702s.18.101.5.101.5-.1.5-.1v.7c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13v1h-7z"/>
                </svg>
            </div>
            
            <h1 class="display-4 fw-bold mb-4 text-primary">
                <?php echo $isExistingUser ? 'You\'re Already on Our List!' : 'Thank You for Your Interest!' ?>
            </h1>
            
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <?php if ($isExistingUser): ?>
                        <p class="lead">We already have your email in our system, which means you'll be among the first to know when we launch!</p>
                        <p>You don't need to sign up again - we'll contact you as soon as our AI Trading Signals service is ready.</p>
                    <?php else: ?>
                        <p class="lead">Our AI Trading Signals service is currently in its final development phase to ensure the highest quality analysis and predictions.</p>
                        <p>We've recorded your interest and will contact you as soon as we're ready to launch. You'll be among the first to know when our service goes live!</p>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="../pages/index.php" class="btn btn-primary px-4">
                    <i class="bi bi-house-door me-2"></i>Return Home
                </a>
                <a href="../pages/features.php" class="btn btn-outline-primary px-4">
                    <i class="bi bi-info-circle me-2"></i>Learn More
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once(__DIR__ . '/../includes/footer.php'); ?>
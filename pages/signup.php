<?php 
require_once(__DIR__ . '/../includes/header.php');

$errorMessages = [
    'missing_fields' => 'Please fill all required fields',
    'invalid_email' => 'Please enter a valid email address',
    'db_error' => 'Database error. Please try again later.',
    'server_error' => 'Server error. Please try again later.'
];

$error = isset($_GET['error']) ? ($errorMessages[$_GET['error']] ?? 'An error occurred') : null;
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-rocket-takeoff fs-3 me-2"></i>
                        <h3 class="mb-0">Subscribe to AI Trading Signals</h3>
                    </div>
                </div>
                
                <div class="card-body p-4 p-md-5">
                    <?php if ($error): ?>
                        <div class="alert alert-danger mb-4">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h4 class="mb-3">Why Subscribe?</h4>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item bg-transparent ps-0"><i class="bi bi-check-circle-fill text-primary me-2"></i> AI-powered market analysis</li>
                                <li class="list-group-item bg-transparent ps-0"><i class="bi bi-check-circle-fill text-primary me-2"></i> Real-time trading signals</li>
                                <li class="list-group-item bg-transparent ps-0"><i class="bi bi-check-circle-fill text-primary me-2"></i> Sentiment analysis</li>
                                <li class="list-group-item bg-transparent ps-0"><i class="bi bi-check-circle-fill text-primary me-2"></i> Risk management tools</li>
                            </ul>
                            
                            <div class="alert alert-info">
                                <i class="bi bi-info-circle-fill me-2"></i>
                                No payment required until service launches
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <form id="signupForm" method="POST" action="signup-process.php">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="company" class="form-label">Company (Optional)</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and conditions</a> <span class="text-danger">*</span></label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    <i class="bi bi-send-check me-2"></i> Subscribe Now
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer bg-light">
                    <p class="small text-muted mb-0">
                        <i class="bi bi-shield-lock me-1"></i> Your information is secure and will never be shared with third parties.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Terms Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>AI Trading Signals Service Agreement</h6>
                <p>By subscribing to our service, you acknowledge that:</p>
                <ul>
                    <li>Our AI trading signals are for informational purposes only</li>
                    <li>We are not financial advisors and don't provide personalized advice</li>
                    <li>All trading decisions are your own responsibility</li>
                    <li>Past performance is not indicative of future results</li>
                </ul>
                <p>We will notify you when the service becomes available and provide payment instructions at that time.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
            </div>
        </div>
    </div>
</div>

<?php require_once(__DIR__ . '/../includes/footer.php'); ?>
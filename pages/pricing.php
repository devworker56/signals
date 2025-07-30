<?php require_once('../includes/header.php'); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center mb-5">
            <h1 class="fw-bold">Simple, Transparent Pricing</h1>
            <p class="lead text-muted">One powerful plan with all features included</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white py-4">
                    <h3 class="text-center mb-0">AI Signals Pro</h3>
                </div>
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <span class="display-3 fw-bold">$99</span>
                        <span class="text-muted">/month</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Unlimited trading signals</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Real-time alerts via email & SMS</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Full technical analysis reports</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Sentiment analysis dashboard</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> 24/7 market monitoring</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Weekly performance reports</li>
                    </ul>
                    <div class="text-center mt-4">
                        <a href="signup.php" class="btn btn-primary btn-lg w-100">Start Free Trial</a>
                    </div>
                    <p class="small text-muted text-center mt-3 mb-0">No credit card required. 7-day free trial.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h4 class="text-center mb-4">Frequently Asked Questions</h4>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Is there a free trial available?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! You can try our service free for 7 days with no payment required. After the trial period, you'll need to subscribe to continue receiving signals.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How are the signals delivered?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Signals are delivered in real-time through your preferred method: email, SMS, or directly to our mobile app (coming soon). You can also access the full history through our web dashboard.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php'); ?>
<?php require_once 'includes/header.php'; ?>

<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold mb-3">Simple Pricing</h1>
            <p class="text-muted lead">One plan with all the features you need to transform your trading strategy</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="text-center mb-5">
                            <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3">Most Popular</span>
                            <h2 class="fw-bold">Professional Plan</h2>
                            <div class="d-flex align-items-baseline justify-content-center mt-4">
                                <span class="display-3 fw-bold">$99</span>
                                <span class="ms-2 text-muted">/month</span>
                            </div>
                        </div>
                        
                        <ul class="list-unstyled mb-5">
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                                    <span>Unlimited trading signals across all asset classes</span>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                                    <span>Real-time alerts via email, SMS, and mobile app</span>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                                    <span>Customizable signal filters based on your strategy</span>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                                    <span>Detailed signal analysis with confidence scores</span>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                                    <span>Historical performance dashboard</span>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                                    <span>24/7 priority customer support</span>
                                </div>
                            </li>
                        </ul>
                        
                        <a href="#signup" class="btn btn-primary btn-lg w-100 py-3">Start 7-Day Free Trial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="signup">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Start Your Free Trial</h2>
                        <p class="text-center text-muted mb-4">Enter your details to begin your 7-day free trial</p>
                        
                        <form action="subscribe.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="firstName" name="first_name" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="lastName" name="last_name" required>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control form-control-lg" id="phone" name="phone">
                            </div>
                            
                            <div class="mb-4">
                                <label for="experience" class="form-label">Trading Experience</label>
                                <select class="form-select form-select-lg" id="experience" name="experience" required>
                                    <option value="" selected disabled>Select your experience level</option>
                                    <option value="beginner">Beginner</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="advanced">Advanced</option>
                                    <option value="professional">Professional</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg w-100 py-3">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Frequently Asked Questions</h2>
            <p class="text-muted">Find answers to common questions about our service</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How accurate are your trading signals?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our signals have an average accuracy rate of 78% based on backtesting across multiple market conditions. However, past performance is not indicative of future results, and we recommend using proper risk management.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What markets do you cover?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We currently cover major US stocks, ETFs, forex pairs, and cryptocurrencies. Our coverage is continuously expanding based on user demand and market conditions.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Can I cancel my subscription anytime?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, you can cancel your subscription at any time. Your access will continue until the end of your current billing period.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                How often do you generate new signals?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We generate signals continuously throughout the trading day. The frequency depends on market conditions and opportunities identified by our algorithms.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Do you offer a mobile app?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we have mobile apps for both iOS and Android that allow you to receive alerts, view signals, and manage your account on the go.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
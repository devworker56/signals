<?php require_once('../includes/header.php'); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-5">
                <h1 class="fw-bold">Contact Us</h1>
                <p class="lead text-muted">Have questions? We're here to help</p>
            </div>

            <div class="card shadow-sm mb-5">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3 class="h4 mb-3">Get in Touch</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="bi bi-envelope-fill text-primary me-2"></i>
                                    support@tradingsignals.example
                                </li>
                                <li class="mb-3">
                                    <i class="bi bi-telephone-fill text-primary me-2"></i>
                                    +1 (555) 123-4567
                                </li>
                                <li>
                                    <i class="bi bi-building text-primary me-2"></i>
                                    123 Market St, Suite 500<br>
                                    San Francisco, CA 94103
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3 class="h4 mb-3">Send Us a Message</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../includes/footer.php'); ?>
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>AI Trading Signals</h5>
                    <p class="text-muted">Advanced artificial intelligence for market analysis and trading signals.</p>
                </div>
                <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                    <h6>Navigation</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="../pages/features.php" class="text-muted">Features</a></li>
                        <li class="mb-2"><a href="../pages/pricing.php" class="text-muted">Pricing</a></li>
                        <li class="mb-2"><a href="../pages/about.php" class="text-muted">About</a></li>
                        <li><a href="../pages/contact.php" class="text-muted">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                    <h6>Legal</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted">Terms of Service</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">Privacy Policy</a></li>
                        <li><a href="#" class="text-muted">Risk Disclosure</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6>Connect</h6>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-muted"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-muted"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-muted"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="text-center text-muted">
                <small>&copy; <?php echo date('Y'); ?> AI Trading Signals. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../assets/js/main.js"></script>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false): ?>
        <script src="../assets/js/chart.js"></script>
    <?php endif; ?>
</body>
</html>
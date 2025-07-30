// Document ready function
document.addEventListener('DOMContentLoaded', function() {
    // Form validation for signup
    const signupForm = document.getElementById('signupForm');
    if (signupForm) {
        signupForm.addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            if (!isValidEmail(email)) {
                e.preventDefault();
                alert('Please enter a valid email address');
            }
        });
    }

    // Admin dashboard interactive elements
    if (document.querySelector('.admin-dashboard')) {
        // Add any admin-specific JS here
    }

    // Mobile menu toggle
    const navbarToggler = document.querySelector('.navbar-toggler');
    if (navbarToggler) {
        navbarToggler.addEventListener('click', function() {
            document.querySelector('.navbar-collapse').classList.toggle('show');
        });
    }
});

// Helper function for email validation
function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}
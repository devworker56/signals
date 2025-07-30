document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('subscriptionsChart');
    if (ctx) {
        // This would be populated with real data in a production environment
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Subscription Attempts',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 2,
                    borderColor: '#0d6efd',
                    backgroundColor: 'rgba(13, 110, 253, 0.1)'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
});
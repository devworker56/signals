<ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= $current_page == 'features.php' ? 'active' : '' ?>" href="features.php">Features</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= $current_page == 'pricing.php' ? 'active' : '' ?>" href="pricing.php">Pricing</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= $current_page == 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
    </li>
    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
        <a href="pricing.php#signup" class="btn btn-primary">Get Started</a>
    </li>
</ul>
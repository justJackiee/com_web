<nav class="navbar">
    <div class="container navbar-container">
        <a href="<?php echo URLROOT; ?>" class="navbar-logo">
            <i class="fas fa-book-open"></i> <?php echo SITENAME; ?>
        </a>
        
        <ul class="navbar-links">
            <li><a href="<?php echo URLROOT; ?>">Home</a></li>
            <li><a href="<?php echo URLROOT; ?>/books">Books</a></li>
            <li><a href="<?php echo URLROOT; ?>/news">News</a></li>
            <li><a href="<?php echo URLROOT; ?>/contact">Contact</a></li>
            <li><a href="<?php echo URLROOT; ?>/faq">FAQ</a></li>
        </ul>
        
        <div class="navbar-actions">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="<?php echo URLROOT; ?>/users/profile" class="btn btn-outline">Profile</a>
                <a href="<?php echo URLROOT; ?>/users/logout" class="btn btn-primary">Logout</a>
            <?php else: ?>
                <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-outline">Login</a>
                <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-primary">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="card-book">
    <div class="card-image">
        <img src="<?php echo $image ?? asset('images/book-placeholder.jpg'); ?>" alt="<?php echo $title; ?>">
        <?php if (isset($badge)): ?>
            <span class="badge"><?php echo $badge; ?></span>
        <?php endif; ?>
    </div>
    <div class="card-body">
        <h3 class="card-title"><?php echo $title; ?></h3>
        <p class="card-author">By <?php echo $author; ?></p>
        <div class="card-footer">
            <span class="card-price">$<?php echo number_format($price, 2); ?></span>
            <a href="<?php echo URLROOT; ?>/books/details/<?php echo $id; ?>" class="btn btn-primary btn-sm">View Details</a>
        </div>
    </div>
</div>

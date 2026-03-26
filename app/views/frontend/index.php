<section class="hero-section container">
    <h1>Welcome to <?php echo SITENAME; ?></h1>
    <p><?php echo $description; ?></p>
</section>

<div class="container mt-5">
    <div class="note">
        <h2>System Status: MVC Framework Initialized</h2>
        <ul>
            <li>Core Router: <strong>Ready</strong></li>
            <li>Base Controller: <strong>Ready</strong></li>
            <li>Database Connection: <strong>Ready</strong></li>
            <li>Base Model: <strong>Ready</strong></li>
        </ul>
    </div>

    <div class="section-header mt-5">
        <h2>Featured Books</h2>
        <p>Explore our latest collection of hand-picked titles.</p>
    </div>

    <div class="book-grid mt-4">
        <?php 
            view_component('card_book', [
                'id' => 1,
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'price' => 12.99,
                'badge' => 'Classic'
            ]); 

            view_component('card_book', [
                'id' => 2,
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'price' => 15.50,
                'badge' => 'Must Read'
            ]);

            view_component('card_book', [
                'id' => 3,
                'title' => '1984',
                'author' => 'George Orwell',
                'price' => 10.99
            ]);
        ?>
    </div>
</div>

<style>
    .mt-5 { margin-top: 3rem; }
    .mt-4 { margin-top: 2rem; }
    .section-header { margin-bottom: 2rem; border-left: 4px solid var(--primary); padding-left: 1rem; }
    .book-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 2rem;
    }
</style>

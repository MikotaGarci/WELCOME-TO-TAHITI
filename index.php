<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Paradise</h1>
        <p>Discover the beauty of Tahiti.</p>
        <a href="#destinations" class="btn">Explore More</a>
    </div>
</section>

<!-- Cards Section -->
<section class="cards-section" id="destinations">
    <div class="cards">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bora-bora.jpg" alt="Bora Bora">
            <h3>BORA BORA</h3>
            <p>From $2,500</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moorea.jpg" alt="Moorea">
            <h3>MOOREA</h3>
            <p>From $2,500</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raiatea.jpg" alt="Raiatea">
            <h3>RAIATEA</h3>
            <p>From $2,500</p>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tahaa.jpg" alt="Taha'a">
            <h3>TAHA'A</h3>
            <p>From $2,500</p>
        </div>
    </div>
</section>

<!-- Footer Section -->
<?php get_footer(); ?>

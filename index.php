<?php get_header(); ?>
<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home-bg.jpg');">
    <h1>Welcome to Tahiti</h1>
    <p>Your dream destination awaits.</p>
    <a href="#destinations" class="btn btn-primary">Explore More</a>
</section>
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
<?php get_footer(); ?>

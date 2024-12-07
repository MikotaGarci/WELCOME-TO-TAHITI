<?php
/* Template Name: Home */
get_header(); ?>

<section class="hero">
    <div class="hero-slider">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider1.jpg" alt="Tahiti"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider2.jpg" alt="Tahiti"></div>
    </div>
</section>

<section class="experience">
    <h2>Experience Tahiti</h2>
    <p>Immerse yourself in Tahiti’s unique culture.</p>
    <a href="#" class="btn btn-danger">Learn More</a>
</section>

<section class="why-tahiti">
    <h2>Why Tahiti?</h2>
    <p>Discover why Tahiti is the perfect vacation destination for you!</p>
</section>

<?php get_footer(); ?>

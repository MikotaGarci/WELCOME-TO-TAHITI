<?php get_header(); ?>

<section class="hero">
    <div class="hero-slider">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider1.jpg" alt="Tahiti"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider2.jpg" alt="Tahiti"></div>
    </div>
</section>

<section class="discover">
    <h2>Discover Tahiti</h2>
    <div class="container">
        <div class="row">
            <?php
            $islands = new WP_Query(['post_type' => 'island']);
            while ($islands->have_posts()) : $islands->the_post(); ?>
                <div class="col-md-3">
                    <div class="card">
                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

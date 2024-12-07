<?php get_header(); ?>
<main>
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; else : ?>
            <p><?php _e('No posts found.', 'tahiti-theme'); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
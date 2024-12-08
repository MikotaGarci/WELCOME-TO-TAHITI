<?php get_header(); ?>
<section class="archive">
    <div class="container">
        <h1>Archive</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>

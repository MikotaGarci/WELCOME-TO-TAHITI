
<?php
/**
 * Footer Template
 *
 * This file is used to display the footer of the website.
 * It includes the logo, columns, and social icons.
 */
?>



<!-- Footer Section -->
<footer class="footer">
    <div class="columns">
        <!-- Footer Logo -->
        <div class="footer-column footer-logo">
            <?php
            // Get the footer logo from ACF
            $footer_logo = get_field('footer_logo', 'option');
            if ($footer_logo) : ?>
                <img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>">
            <?php endif; ?>
        </div>

        <!-- Footer Columns -->
        <?php if (have_rows('footer_columns', 'option')) : ?>
            <?php while (have_rows('footer_columns', 'option')) : the_row(); ?>
                <div class="footer-column">
                    <h3><?php the_sub_field('column_title'); ?></h3>
                    <ul>
                        <?php if (have_rows('column_links')) : ?>
                            <?php while (have_rows('column_links')) : the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('link_url'); ?>">
                                        <?php the_sub_field('link_text'); ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- Social Icons -->   
        <div class="social-icons">
            <?php if (have_rows('footer_social_icons', 'option')) : ?>
                <?php while (have_rows('footer_social_icons', 'option')) : the_row(); ?>
                    <a href="<?php the_sub_field('social_icon_url'); ?>" class="social-icon" target="_blank">
                        <i class="<?php the_sub_field('social_icon_class'); ?>"></i>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    
</footer>

<!-- WordPress Footer Hook -->
<?php wp_footer(); ?>
</body>
</html>
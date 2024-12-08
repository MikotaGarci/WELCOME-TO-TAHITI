<?php
function tahiti_theme_setup() {
    // Add theme support
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus([
        'main-menu' => __('Main Menu', 'tahiti'),
    ]);

    // Enqueue styles
    wp_enqueue_style('tahiti-style', get_template_directory_uri() . '/style.css');
}
add_action('after_setup_theme', 'tahiti_theme_setup');

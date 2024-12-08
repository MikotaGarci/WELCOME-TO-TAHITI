<?php
function tahiti_theme_setup() {
   
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'tahiti-theme'),
    ));
}
add_action('wp_enqueue_scripts', 'tahiti_theme_setup');
?>

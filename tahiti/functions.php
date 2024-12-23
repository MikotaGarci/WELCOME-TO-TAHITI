<?php

function tahiti_enqueue_scripts() {
    
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    
  
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), null); // Подключаем FontAwesome

   
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'tahiti_enqueue_scripts');


function tahiti_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'tahiti'),
    ));
}
add_action('init', 'tahiti_register_menus');


function tahiti_theme_setup() {
    
    add_theme_support('title-tag');
    
    
    add_theme_support('post-thumbnails');
    
    
    set_post_thumbnail_size(150, 150, true);
    
   
    remove_theme_support('custom-background');
    remove_theme_support('custom-header');
}
add_action('after_setup_theme', 'tahiti_theme_setup');


function tahiti_remove_block_editor_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'tahiti_remove_block_editor_styles', 100);


function tahiti_cleanup_styles($classes) {
    return array_diff($classes, array('has-text-align-left', 'has-text-align-right', 'has-background'));
}
add_filter('body_class', 'tahiti_cleanup_styles');
?>


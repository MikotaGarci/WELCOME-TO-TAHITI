<?php
function tahiti_theme_setup() {
    // Подключение CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    
    // Подключение JavaScript (если нужно)
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'tahiti_theme_setup');

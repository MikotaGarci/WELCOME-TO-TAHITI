<?php
// Настройка темы
function tahiti_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus([
        'main-menu' => 'Main Menu',
    ]);
}
add_action('after_setup_theme', 'tahiti_theme_setup');

// Подключение стилей и скриптов
function tahiti_enqueue_scripts() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', ['jquery'], null, true);
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/scripts.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'tahiti_enqueue_scripts');

// Регистрация CPT для островов
function tahiti_register_cpt() {
    register_post_type('island', [
        'labels' => [
            'name' => 'Islands',
            'singular_name' => 'Island',
        ],
        'public' => true,
        'has_archive' => false,
        'supports' => ['title', 'thumbnail', 'editor'],
        'menu_icon' => 'dashicons-palmtree',
    ]);
}
add_action('init', 'tahiti_register_cpt');
?>

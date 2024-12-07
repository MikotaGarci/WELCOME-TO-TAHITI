<?php
function tahiti_theme_setup() {
    // Добавляем поддержку заголовков, меню, миниатюр
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'tahiti-theme'),
    ));
}
add_action('after_setup_theme', 'tahiti_theme_setup');

function tahiti_enqueue_scripts() {
    // Подключение CSS и JS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'tahiti_enqueue_scripts');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
            <?php
            wp_nav_menu([
                'theme_location' => 'main-menu',
                'container_class' => 'collapse navbar-collapse',
                'menu_class' => 'navbar-nav ms-auto',
            ]);
            ?>
        </div>
    </nav>
</header>

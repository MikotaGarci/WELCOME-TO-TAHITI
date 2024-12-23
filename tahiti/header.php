<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="main-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        <!-- Бургер-меню -->
        <div class="burger-menu" id="burger-menu">
            <div class="burger-icon" id="burger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="mobile-menu" id="mobile-menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container'      => false,
                    'menu_class'     => 'menu',
                )); ?>
            </nav>
        </div>
        <!-- Основне меню -->
        <nav class="main-nav">
            <?php wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => 'menu',
            )); ?>
        </nav>
    </div>
</header>
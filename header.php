<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container">
        <h1><a href="<?php echo home_url(); ?>">Tahiti</a></h1>
        <nav class="main-nav">
            <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
        </nav>
    </div>
</header>

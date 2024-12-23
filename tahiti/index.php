<?php get_header(); ?>

<?php
// Получение данных из ACF полей
$background_image = get_field('background_image');
$title = get_field('title');
$subtitle = get_field('subtitle');

// Discover Section ACF Data
$discover_title = get_field('discover_title');
$discover_subtitle = get_field('discover_subtitle');
$discover_cards = get_field('discover_cards'); // Поле типа Repeater

// Why Tahiti Section ACF Data
$why_tahiti_image = get_field('why_tahiti_image'); 
$bold_title = get_field('bold_title'); 
$light_title = get_field('light_title'); 
$why_tahiti_subtitle = get_field('why_tahiti_subtitle'); 
$why_tahiti_description = get_field('why_tahiti_description'); 
$why_tahiti_title = get_field('why_tahiti_title'); 
$why_tahiti_content = get_field('why_tahiti_content'); 
$why_tahiti_button = get_field('why_tahiti_button'); 
$why_tahiti_button_text = get_field('why_tahiti_button_text');
$why_tahiti_button_link = get_field('why_tahiti_button_link');

// Contact Section ACF Data
$contact_background_image = get_field('contact_background_image');
$contact_title = get_field('contact_title');
$contact_text = get_field('contact_text');
$contact_button_text = get_field('contact_button_text');
$contact_button_link = get_field('contact_button_link');


// New Section ACF Data
$new_section_background_image = get_field('new_section_background_image');
$new_section_title = get_field('new_section_title');
$new_section_text = get_field('new_section_text');
?>

<!-- Hero Section -->
<?php if ($background_image || $title): ?>
    <section 
        class="new-section" 
        style="background-image: url('<?php echo esc_url($background_image['url'] ?? ''); ?>');">
        <div class="new-section-content">
            <?php if (!empty($title)): ?>
                <h1 class="new-section-title"><?php echo esc_html($title); ?></h1>
            <?php endif; ?>
            
            <?php if (!empty($subtitle)): ?>
                <p class="new-section-subtitle"><?php echo esc_html($subtitle); ?></p>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Discover Section -->
<?php if ($discover_title || $discover_cards): ?>
<section id="discover" class="discover-section">
    <div class="discover-text">
        <?php if ($discover_title): ?>
            <h1 class="title">
                <?php echo esc_html($discover_title); ?>
            </h1>
        <?php endif; ?>
        <?php if ($discover_subtitle): ?>
            <p><?php echo esc_html($discover_subtitle); ?></p>
        <?php endif; ?>
    </div>
    <div class="island-cards">
        <?php if ($discover_cards): ?>
            <?php foreach ($discover_cards as $card): ?>
                <div class="card">
                    <img src="<?php echo esc_url($card['image']['url']); ?>" alt="<?php echo esc_attr($card['title']); ?>">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['price']); ?></p>
                    <a href="<?php echo esc_url($card['link']); ?>" class="btn">View More</a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- Why Tahiti Section -->
<?php if ($why_tahiti_image || $bold_title || $light_title || $why_tahiti_subtitle || $why_tahiti_description): ?>
    <section class="why-tahiti background-section">
        <div class="container">
            <?php if ($why_tahiti_image): ?>
                <div class="image">
                    <img src="<?php echo esc_url($why_tahiti_image['url']); ?>" alt="<?php echo esc_attr($why_tahiti_image['alt']); ?>">
                </div>
            <?php endif; ?>

            <?php if ($bold_title || $light_title): ?>
                <h1>
                    <?php if ($bold_title): ?>
                        <span class="bold-title"><?php echo esc_html($bold_title); ?></span>
                    <?php endif; ?>
                    <?php if ($light_title): ?>
                        <span class="light-title"><?php echo esc_html($light_title); ?></span>
                    <?php endif; ?>
                </h1>
            <?php endif; ?>

            <?php if ($why_tahiti_subtitle): ?>
                <h3 class="subtitle"><?php echo esc_html($why_tahiti_subtitle); ?></h3>
            <?php endif; ?>

            <?php if ($why_tahiti_description): ?>
                <p class="description"><?php echo esc_html($why_tahiti_description); ?></p>
            <?php endif; ?>

            <!-- Проверяем, есть ли текст и ссылка для кнопки -->
            <?php if ($why_tahiti_button_text && $why_tahiti_button_link): ?>
                <a href="<?php echo esc_url($why_tahiti_button_link); ?>" class="btn">
                    <?php echo esc_html($why_tahiti_button_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Why Tahiti Section (No Background) -->
<?php if ($why_tahiti_title || $why_tahiti_content): ?>
    <section class="why-tahiti no-background-section">
        <div class="container">
            <?php if ($why_tahiti_title): ?>
                <h2><?php echo esc_html($why_tahiti_title); ?></h2>
            <?php endif; ?>

            <?php if ($why_tahiti_content): ?>
                <div class="content">
                    <?php echo wp_kses_post($why_tahiti_content); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Contact Section -->
<?php if ($contact_background_image || $contact_title): ?>
<section class="hero-section2" style="background-image: url('<?php echo esc_url($contact_background_image['url']); ?>');">
    <div class="hero-overlay"></div>
    <div class="hero-content2">
        <?php if ($contact_title): ?>
            <h1><?php echo esc_html($contact_title); ?></h1>
        <?php endif; ?>
        <?php if ($contact_text): ?>
            <p><?php echo esc_html($contact_text); ?></p>
        <?php endif; ?>
        <?php if ($contact_button_text && $contact_button_link): ?>
            <a href="<?php echo esc_url($contact_button_link); ?>" class="btp"><?php echo esc_html($contact_button_text); ?></a>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- New Section -->
<?php if ($new_section_background_image || $new_section_title): ?>
<section 
    class="new-section" 
    style="background-image: url('<?php echo esc_url($new_section_background_image['url'] ?? ''); ?>');">
    <div class="new-section-content">
        <?php if ($new_section_title): ?>
            <h1 class="new-section-title"><?php echo esc_html($new_section_title); ?></h1>
        <?php endif; ?>
        <?php if ($new_section_text): ?>
            <p class="new-section-subtitle"><?php echo esc_html($new_section_text); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
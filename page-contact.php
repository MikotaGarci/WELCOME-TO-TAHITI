<?php
/* Template Name: Contact */
get_header(); ?>
<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/contact-bg.jpg');">
    <h1>Contact Us</h1>
    <p>Get in touch with us to plan your dream vacation in Tahiti.</p>
</section>
<section class="content-section">
    <form action="#" method="POST" class="contact-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</section>
<?php get_footer(); ?>

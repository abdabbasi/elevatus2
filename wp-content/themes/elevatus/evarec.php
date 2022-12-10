<?php
    /* Template Name: Products Page Template */
    get_header();
?>

<main id="primary" class="site-main <?php echo get_field('page_theme'); ?>">

    <?php the_content(); ?>
    
    <!-- CTA Section -->
    <?php include get_theme_file_path('/inc/cta-section.php'); ?>
</main>

<?php
get_footer();
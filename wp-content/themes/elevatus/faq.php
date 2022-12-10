<?php
    /* Template Name: FAQs Page */
    get_header();
?>

<main class="privacy-page <?php echo get_field('additional_classes'); ?>">

    <?php the_content(); ?>

    <!-- CTA Section -->
    <?php include get_theme_file_path('/inc/cta-section.php'); ?>
</main>


<?php
get_footer();
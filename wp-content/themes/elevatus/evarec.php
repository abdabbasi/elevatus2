<?php
    /* Template Name: Products Page Template */
    get_header();
?>

<div>
    <?php echo the_content(); ?>
</div>

<!-- CTA Section -->
<?php include get_theme_file_path('/inc/cta-section.php'); ?>

<?php
get_footer();
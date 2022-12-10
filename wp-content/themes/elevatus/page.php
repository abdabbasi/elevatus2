<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elevatus_2022
 */

get_header();
?>

	<main id="primary" class="site-main <?php echo get_field('additional_classes'); ?>">

		<?php the_content(); ?>

		<!-- CTA Section -->
		<?php include get_theme_file_path('/inc/cta-section.php'); ?>

	</main><!-- #main -->

<?php
get_footer();

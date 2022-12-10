<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elevatus_2022
 */

get_header();
?>

<main id="primary" class="site-main <?php echo get_field('additional_classes'); ?>">

    <?php 
	if ( !is_front_page() && is_home() ) :

		if ( empty ( $post_id) ) :
			global $post;
			$post_id =  get_option( 'page_for_posts' );

		endif;

	//blog page
	print_r($post_id)
	endif;

	?>

    <?php the_content(); ?>

    <?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

    <!-- CTA Section -->
    <?php include get_theme_file_path('/inc/cta-section.php'); ?>

</main><!-- #main -->

<?php
get_footer();
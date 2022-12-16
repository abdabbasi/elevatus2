<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package elevatus_2022
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found container">			
			<div class="d-flex fd-col j-center align-center pt-3 pb-3">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'elevatus' ); ?></h1>
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'elevatus' ); ?></p>

				<a class="btn btn-main" href="<?php echo site_url(); ?>"><?php esc_html_e( 'Back to home', 'elevatus' ); ?></a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

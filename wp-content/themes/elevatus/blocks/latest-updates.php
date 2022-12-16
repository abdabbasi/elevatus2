<?php 
$cat_ID = get_the_category()[0]->term_id;
$args = array(
    'posts_per_page' => 4,
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
);
$the_query = new WP_Query( $args ); 
?>

<section class="blog-listing mt-3 mb-3">
	<div class="container">
        <div class="section-title d-flex j-sb mb-2 align-center">
            <h3><?php echo get_field('trending_section_title'); ?></h3>
            <a class="btn-outline" href="<?php echo get_field('more_button')['url']; ?>"><?php echo get_field('more_button')['title']; ?></a>
        </div>
		<div class="d-flex flex-wrap">
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<article <?php post_class('item w-2'); ?>>
					<div class="blog-wrapper d-flex flex-wrap align-center">

						<?php elevatus_post_thumbnail(); ?>

						<a href="<?php echo get_permalink(); ?>" class="content">
							<p class="cat"><?php echo get_the_category()[0]->name; ?></p>
							<h5 class="title"><?php echo strip_shortcodes(wp_trim_words(get_the_title(), 5, '...')); ?></h5>

							<p class="post-content"><?php echo strip_shortcodes(wp_trim_words(get_the_content(), 10, '...')); ?></p>

							<p class="date"><?php echo get_the_date(); ?></p>
						</a>
					</div>
				</article>

			<?php endwhile; endif; wp_reset_postdata();?>
		</div>
	</div>
</section>

text/x-generic single.php ( PHP script text )
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package elevatus_2022
 */

get_header();
?>

<main id="primary" class="site-main has-side-menu">

    <section class="single-blog-header">
        <div class="blog-wrapper d-flex flex-wrap align-center">
            <?php elevatus_post_thumbnail(); ?>
            <div class="content w-2">
                <p class="cat"><?php echo get_the_category()[0]->name; ?></p>
                <h1 class="title"><?php echo get_the_title();?></h1>
                <p class="date"><?php echo get_the_date(); ?></p>
            </div>
        </div>
    </section>

    <section class="single-blog pb-3">
        <div class="container" data-controller="sidemenu">
            <div class="content-wrapper d-flex flex-wrap pt-2">
                <div class="menu-side-wrapper on-desktop">
                    <div class="pos-stk mr-2">
                        <!-- <h4 class="section-title"><?php get_field('side_navigation_menu_title', 'option'); ?></h4> -->
                        <div class="side-menu">

                        </div>
                        <div class="subscribe-box mt-2">
                            <h4><?php echo get_field('newsletters_title', 'option'); ?></h4>
                            <p><?php echo get_field('newsletters_subtitle', 'option'); ?></p>
                            <div class="form">
                                <?php echo do_shortcode(get_field('newsletters_form', 'option'));?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-side">
                    <?php echo get_the_content(); ?>

                    <!-- CTA Section -->
                    <div class="cta-sec w-1">
                        <h3><?php echo get_field('cta_title', 'option'); ?></h3>
                        <p class="content"><?php echo get_field('cta_content', 'option'); ?></p>
                        <a class="btn btn-main" href="<?php echo get_field('cta_button', 'option')['url']; ?>" target="<?php echo get_field('cta_button', 'option')['target']; ?>"><?php echo get_field('cta_button', 'option')['title']; ?></a>
                    </div>

					<div class="subscribe-box mt-2 on-mobile">
						<h4><?php echo get_field('newsletters_title', 'option'); ?></h4>
						<p><?php echo get_field('newsletters_subtitle', 'option'); ?></p>
						<div class="form">
							<?php echo do_shortcode(get_field('newsletters_form', 'option'));?>
						</div>
					</div>
                </div>
                <div class="sm-side">
                    <div class="share-icons d-flex fd-col align-center">
                        <a rel="nofollow" class="icon"
                            href="https://www.facebook.com/sharer.php?u=<?php echo get_page_link(); ?>" target="_blank">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a>
                        <a rel="nofollow" class="icon"
                            href="http://twitter.com/share?text=MDLBEAST and Chain Reaction Partner to Put Data at The Heart of The Regional Digital Music Scene.&amp;url=<?php echo get_page_link(); ?>"
                            target="_blank">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a rel="nofollow" class="icon"
                            href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_page_link(); ?>"
                            target="_blank">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- #main -->

<?php 
$cat_ID = get_the_category()[0]->term_id;
$args = array(
    'posts_per_page' => 4,
    'offset' => 0,
    'cat' => $cat_ID,
    'orderby' => 'ID',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true 
);
$the_query = new WP_Query( $args ); 
?>

<section class="blog-listing">
	<div class="container">
		<h3 class="section-title"><?php echo get_field('related_section_title', 'option'); ?></h3>
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

<!-- Trending Section -->
<section class="trending-sec mt-5 mb-3">
    <div class="container">
        <h3 class="section-title"><?php echo get_field('trending_section_title', 'option'); ?></h3>
        <div class="blog-listing d-flex flex-wrap">
            <?php for ($i=0; $i < count(get_field('trending_posts', 'option')); $i++) : ?>
            <?php $pageID = get_field('trending_posts', 'option')[$i]; ?>
            <article class='item'>
                <div class="blog-wrapper d-flex flex-wrap align-center">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $pageID->ID ), 'single-post-thumbnail' ); ?>
                    <a class="post-thumbnail" href="<?php echo get_permalink($pageID); ?>" aria-hidden="true"
                        tabindex="-1">
                        <img src="<?php echo $image[0]; ?>"
                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                            alt="<?php echo $pageID->post_title;?>" loading="lazy">
                    </a>
                    <a href="<?php echo get_permalink($pageID); ?>" class="content">
                        <p class="cat"><?php echo get_the_category($pageID)[0]->name; ?></p>
                        <h5 class="title">
                            <?php echo strip_shortcodes(wp_trim_words($pageID->post_title, 5, '...')); ?>
                        </h5>
                        <p class="post-content">
                            <?php echo strip_shortcodes(wp_trim_words($pageID->post_content, 8, '...')); ?>
                        </p>
                        <?php
								$timestamp = $pageID->post_date;
								$friendly_date = date_i18n( get_option('date_format'), $timestamp );
							?>

                        <p class="date"><?php echo $friendly_date; ?></p>
                    </a>
                </div>
            </article>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-sec  pt-3 pb-4">
    <div class="container">
        <h3><?php echo get_field('cta_title', 'option'); ?></h3>
        <p class="content"><?php echo get_field('cta_content', 'option'); ?></p>
        <a class="btn btn-main" href="<?php echo get_field('cta_button', 'option')['url']; ?>" target="<?php echo get_field('cta_button', 'option')['target']; ?>"><?php echo get_field('cta_button', 'option')['title']; ?></a>
    </div>
</section>

<?php
get_footer();
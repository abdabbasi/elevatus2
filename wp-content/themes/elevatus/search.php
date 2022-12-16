<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package elevatus_2022
 */

get_header();
?>

<?php 
	if (is_home() || is_archive()) {
		$page_for_posts = '1600';
	} else {
		$page_for_posts = $post->ID;
	}

	global $wp_query;
	$all_cats = get_categories(); 
?>

<main id="primary" class="site-main blog-page partnership-page">

    <!-- Page Header -->
    <?php 
		if (is_home() || is_archive() || is_search()) {
			$page_for_posts = '1600';
		} else {
			$page_for_posts = $post->ID;
		}
	?>

    <!-- Header -->
    <section class="product-header-sec <?php echo $block['className']; ?>">
        <div class="container h-1">
            <div class="d-flex flex-wrap align-center h-1">
                <div class="w-13 content">
                    <img class="logo" src="<?php echo get_field('page_logo', $page_for_posts)['url']; ?>"
                        alt="<?php echo get_field('page_logo', $page_for_posts)['alt']; ?>">
					<h1>
					<?php
						printf( esc_html__( 'Search Results for: %s', 'elevatus' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <div id="filter_sec" class="filter-sec">
        <div class="container">
            <div class="d-flex j-sb flex-wrap align-center">
                <div class="d-flex flex-wrap align-center">
                    <h4 class="pr-1"><span>I want to learn about</span></h4>
                    <?php if (count($all_cats) != 0) : ?>
                    <select class="links">
                        <option class="link" value="<?php echo site_url().'/blog'; ?>">
                            everything
                        </option>
                        <?php foreach ($all_cats as $term) : ?>
                        <?php
								$term_name = $term->name;
								$term_ID = $term->term_id;
								$term_count = $term->count;
	
								if ($term_ID != 1) :
								?>
                        <option class="link" value="<?php echo get_term_link($term_ID); ?>">
                            <?php echo $term_name . '(' . $term_count . ')'; ?>
                        </option>
                        <?php
								endif;
							endforeach;
							?>
                    </select>
                    <?php endif; ?>
                </div>
                <div class="search-wrapper w-3">
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-listing">
        <div class="container">
            <h3 class="section-title"><?php echo get_field('blog_listing_title', 'option'); ?></h3>
            <?php
			if ( have_posts() ) :
				?>
            <div class="d-flex flex-wrap">
                <?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
						?>
            </div>
            <?php
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
        </div>

        <?php the_posts_pagination();?>
    </section>

    <!-- Templates Section -->
    <section class="templates-sec">
        <div class="container">
            <h3 class="section-title"><?php echo get_field('templates_section_title', 'option'); ?></h3>
            <div class="listing d-flex flex-wrap">
                <?php foreach ($all_cats as $term) : ?>
                <?php
					$term_name = $term->name;
					$term_ID = $term->term_id;
					$term_count = $term->count; 
				?>
                <div class="w-3">
                    <a class="item" href="<?php echo get_term_link($term_ID); ?>">
                        <?php echo $term_name . '<span>' . $term_count . '</span>'; ?>->
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Subscribe Section -->
    <section class="subscribe-sec">
        <div class="container">
            <div class="d-flex flex-wrap j-sb">
                <div class="content w-2 pr-3">
                    <h2><?php echo get_field('newsletters_title', 'option'); ?></h2>
                    <p><?php echo get_field('newsletters_subtitle', 'option'); ?></p>
                    <div class="form">
                        <?php echo do_shortcode(get_field('newsletters_form', 'option'));?>
                    </div>
                </div>
                <div class="w-3">
                    <img class="w-1" src="<?php echo get_field('newsletters_image', 'option'); ?>"
                        alt="<?php echo get_field('newsletters_title', 'option'); ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <?php include get_theme_file_path('/inc/cta-section.php'); ?>

</main><!-- #main -->

<?php
get_footer();
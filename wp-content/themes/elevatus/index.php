<?php

/* Template Name: Blog */

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

<?php 
	if (is_home() || is_archive()) {
		$page_for_posts = '1600';
	} else {
		$page_for_posts = $post->ID;
	}

	global $wp_query;
	$all_cats = get_categories(); 
?>

<main id="primary" class="site-main <?php echo get_field('additional_classes', $page_for_posts); ?>">

    <!-- Page Header -->
    <?php include get_theme_file_path('/inc/blog-header.php'); ?>

    <!-- Trending Section -->
    <section class="trending-sec mt-3 mb-3">
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
<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elevatus_2022
 */

?>

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

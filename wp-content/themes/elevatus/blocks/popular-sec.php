<?php $pageID = get_field('post'); ?>
<section class="single-blog-header">
    <div class="container">
        <h3 class="section-title"><?php echo get_field('main_title'); ?></h3>
        <div class="blog-wrapper d-flex flex-wrap align-center mt-2">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $pageID->ID ), 'single-post-thumbnail' ); ?>
            <a class="post-thumbnail" href="<?php echo get_permalink($pageID); ?>" aria-hidden="true" tabindex="-1">
                <img style="height: 50vh;" src="<?php echo $image[0]; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                    alt="<?php echo $pageID->post_title;?>" loading="lazy">
            </a>
            <div class="content w-2">
                <a href="<?php echo get_permalink($pageID); ?>">
                    <p class="cat"><?php echo get_the_category($pageID)[0]->name; ?></p>
                    <h2 class="title"><?php echo strip_shortcodes(wp_trim_words($pageID->post_title, 8, '...')); ?></h2>
                    <p class="date">
                        <?php echo strip_shortcodes(wp_trim_words($pageID->post_content, 8, '...')); ?>
                    </p>
                    <?php
                        $timestamp = $pageID->post_date;
                        $friendly_date = date_i18n( get_option('date_format'), $timestamp );
                    ?>
                    <p class="date"><?php echo $friendly_date; ?></p>
                </a>
            </div>
        </div>
    </div>
</section>


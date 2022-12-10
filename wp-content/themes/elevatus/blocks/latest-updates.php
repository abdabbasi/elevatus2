<?php
	$recent_posts = wp_get_recent_posts(array(
		'numberposts' => 4, // Number of recent posts thumbnails to display
		'post_status' => 'publish' // Show only the published posts
	));
?>

<section class="latest-updates <?php echo $block['className']; ?>">
    <div class="container">
        <div class="head d-flex j-sb align-center mb-4">
            <h3>Our latest updates</h3>
            <a href="<?php echo site_url('/blog'); ?>">View more -></a>
        </div>
        <div class="content d-flex flex-wrap">
            <?php foreach( $recent_posts as $post_item ) : ?>
                <a href="<?php echo get_permalink($post_item['ID']) ?>" class="post w-2 d-flex mb-2">
                    <div class="image">
                        <img src="<?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>"
                            alt="<?php echo $post_item['post_title'] ?>">
                    </div>
                    <div class="sub-content">
                        <h5 class="category"><?php echo get_the_category($post_item['ID'])[0]->name ?></h5>
                        <h3 class="title"><?php echo $post_item['post_title'] ?></h3>
                        <p class="description"><?php echo strip_shortcodes(wp_trim_words($post_item['post_content'], 30, '...')); ?></p>
                        <p class="date"><?php echo $post_item['post_date'] ?></p>
                        <p class="posted_by"><?php echo the_author_meta( 'user_nicename' , $post_item['post_author']) ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
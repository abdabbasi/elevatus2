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
                <img class="logo" src="<?php echo get_field('page_logo', $page_for_posts)['url']; ?>" alt="<?php echo get_field('page_logo', $page_for_posts)['alt']; ?>">
                <h1><?php echo get_field('page_title', $page_for_posts); ?></h1>
                <p class="subtitle"><?php echo get_field('page_subtitle', $page_for_posts); ?></p>
                <?php if(get_field('hide_button', $page_for_posts) == 0) : ?>
                <a class="btn btn-main"
                    href="<?php echo get_field('header_button', $page_for_posts)['url']; ?>"><?php echo get_field('header_button', $page_for_posts)['title']; ?></a>
                <?php endif; ?>
                    <p class="small-title"><?php echo get_field('small_title', $page_for_posts);?></p>
                <img src="<?php echo get_field('logos_image', $page_for_posts)['url']; ?>"
                    alt="<?php echo get_field('logos_image', $page_for_posts)['alt']; ?>">
            </div>
            <div class="w-3 image">
                <img src="<?php echo get_field('side_image', $page_for_posts)['url']; ?>"
                    alt="<?php echo get_field('side_image', $page_for_posts)['alt']; ?>">
            </div>
        </div>
    </div>
</section>
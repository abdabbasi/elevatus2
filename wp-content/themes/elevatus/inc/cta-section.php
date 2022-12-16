<?php 
if (is_home() || is_archive() || is_search()) {
    $page_for_posts = '1600';
} else {
    $page_for_posts = $post->ID;
}
?>

<section class="cta-sec  pt-3 pb-4 p-rel">
    <div class="container">
        <h3><?php echo get_field('cta_title', $page_for_posts); ?></h3>
        <p class="content"><?php echo get_field('cta_content', $page_for_posts); ?></p>
        <a class="btn btn-main" href="<?php echo get_field('cta_button', $page_for_posts)['url']; ?>" target="<?php echo get_field('cta_button', $page_for_posts)['target']; ?>"><?php echo get_field('cta_button', $page_for_posts)['title']; ?></a>
    </div>
</section>
<section class="cta-sec  pt-3 pb-4 p-rel">
    <div class="container">
        <h3><?php echo get_field('cta_title'); ?></h3>
        <p class="content"><?php echo get_field('cta_content'); ?></p>
        <a class="btn btn-main" href="<?php echo get_field('cta_button')['url']; ?>" target="<?php echo get_field('cta_button')['target']; ?>"><?php echo get_field('cta_button')['title']; ?></a>
    </div>
</section>
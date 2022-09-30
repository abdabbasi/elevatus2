<!-- Explore platform Section -->
<section class="explore-sec pt-3 pb-4">
    <div class="container">
        <h3><?php echo get_field('explore_title'); ?></h3>
        <div class="d-flex flex-wrap j-sb pt-1">
            <?php for ($i=0; $i < count(get_field('product')); $i++) : ?>
            <?php $pageID = get_field('product')[$i]; ?>
            <div class="box d-flex fd-col j-sb">
                <div class="content">
                    <img class="logo" src="<?php echo get_field('logo', $pageID)['url']; ?>"
                        alt="<?php echo get_field('logo', $pageID)['alt']; ?>">
                    <p class="title"><?php echo get_field('content', $pageID); ?></p>
                    <a class="link" href="<?php echo get_permalink($pageID); ?>"><img
                            src="<?php echo site_url('/wp-content/themes/elevatus/assets/images/arrow-right-xl.svg'); ?>"
                            alt="arrow-up-right"></a>
                </div>
                <img class="image" src="<?php echo get_field('image', $pageID)['url']; ?>"
                    alt="<?php echo get_field('image', $pageID)['alt']; ?>">
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
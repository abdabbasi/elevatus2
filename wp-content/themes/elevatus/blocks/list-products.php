<!-- Explore platform Section -->
<section class="explore-sec pt-3 pb-4 <?php echo $block['className']; ?>">
    <div class="container">
        <div class="mb-1 pt-1" style="border-bottom: 1px solid #E4E4EB;">
            <h3><?php echo get_field('explore_title'); ?></h3>
        </div>
        <div class="d-flex flex-wrap j-sb pt-1">
            <?php for ($i=0; $i < count(get_field('product')); $i++) : ?>
            <?php $pageID = get_field('product')[$i]; ?>
            <div class="box d-flex fd-col j-sb">
                <div class="content">
                    <img class="logo" src="<?php echo get_field('logo', $pageID)['url']; ?>"
                        alt="<?php echo get_field('logo', $pageID)['alt']; ?>">
                    <p class="sub-heading title"><?php echo get_field('content', $pageID); ?></p>
                    <div class="d-flex j-end">
                        <a class="link mt-2" href="<?php echo get_permalink($pageID); ?>"><img
                                src="<?php echo site_url('/wp-content/themes/elevatus/assets/images/arrow-right-xl.svg'); ?>"
                                alt="arrow-up-right"></a>
                    </div>
                </div>
                <img class="image" src="<?php echo get_field('image', $pageID)['url']; ?>"
                    alt="<?php echo get_field('image', $pageID)['alt']; ?>">
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
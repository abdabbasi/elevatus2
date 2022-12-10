<!-- Header -->
<section class="product-header-sec <?php echo $block['className']; ?>">
    <div class="container h-1">
        <div class="d-flex flex-wrap align-center h-1">
            <div class="w-13 content">
                <img class="logo" src="<?php echo get_field('page_logo')['url']; ?>" alt="<?php echo get_field('page_logo')['alt']; ?>">
                <h1><?php echo get_field('page_title'); ?></h1>
                <p class="subtitle"><?php echo get_field('page_subtitle'); ?></p>
                <?php if(get_field('hide_button') == 0) : ?>
                <a class="btn btn-main"
                    href="<?php echo get_field('header_button')['url']; ?>"><?php echo get_field('header_button')['title']; ?></a>
                <?php endif; ?>
                    <p class="small-title"><?php echo get_field('small_title');?></p>
                <img src="<?php echo get_field('logos_image')['url']; ?>"
                    alt="<?php echo get_field('logos_image')['alt']; ?>">
            </div>
            <div class="w-3 image">
                <img src="<?php echo get_field('side_image')['url']; ?>"
                    alt="<?php echo get_field('side_image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
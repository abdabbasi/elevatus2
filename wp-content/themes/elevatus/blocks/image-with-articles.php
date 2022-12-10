<?php
    $left_side_width = get_field('left_side_width');
    $right_side_width = get_field('right_side_width');

    $have_left_side = get_field('have_left_side');
    $have_right_side = get_field('have_right_side');

?>


<section class="image-articles-sec pt-3 pb-4 <?php echo $block['className']; ?>">
    <div class="container">
        <h2><?php echo get_field('main_title'); ?></h2>
    </div>

    <div class="d-flex flex-wrap pt-4">
        <div class="w-2 <?php echo $left_side_width;  ?> image">
            <img src="<?php echo get_field('side_image')['url']; ?>" alt="<?php echo get_field('side_image')['alt']; ?>">
        </div>
    
        <div class="w-2 content d-flex flex-wrap <?php echo $right_side_width ?>">
            <?php if( have_rows('articles') ): ?>
            <?php while( have_rows('articles') ): the_row();?>
    
            <div class="w-2 article">
                <img src="<?php echo get_sub_field('article_image')['url']; ?>"
                    alt="<?php echo get_sub_field('article_image')['alt']; ?>">
                <h4><?php echo get_sub_field('title'); ?></h4>
                <p class="light"><?php echo get_sub_field('subtitle'); ?></p>
            </div>
    
            <?php endwhile;?>
            <?php endif; ?>
        </div>
    </div>
</section>
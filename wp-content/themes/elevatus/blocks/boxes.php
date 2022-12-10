<section class="boxes-list-sec mt-4 mb-4 <?php echo $block['className']; ?>" style="background-image: url('<?php echo get_field('background_image'); ?>');">
    <div class="container">
        <h2 class="white w-2"><?php echo get_field('title'); ?></h2>
        <div class="boxes d-flex flex-wrap pt-2">
            <?php if( have_rows('boxes') ): ?>
            <?php while( have_rows('boxes') ): the_row();?>
            <div class="box">
                <img src="<?php echo get_sub_field('image') ?>" alt="">
                <p class="sub-heading"><?php echo get_sub_field('title'); ?></p>
                <p class="sub-title light"><?php echo get_sub_field('content'); ?></p>
            </div>
            <?php endwhile;?>
            <?php endif; ?>
        </div>
    </div>
</section>
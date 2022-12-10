<section class="statistics-sec bg-img mt-3 mb-3 <?php echo $block['className']; ?>" style="background-image: url('<?php echo get_field('background_image'); ?>');">
    <div class="container">
        <div class="d-flex flex-wrap j-end col">
            <div class="box-wrapper w-2">
                <h3><?php echo get_field('title'); ?></h3>
                <div class="list d-flex flex-wrap">
                    <?php if( have_rows('statistics') ): ?>
                    <?php while( have_rows('statistics') ): the_row();?>
                    <div class="w-2 box">
                        <p class="number"><?php echo get_sub_field('number'); ?></p>
                        <h6><?php echo get_sub_field('title'); ?></h6>
                        <p class="sub-title light"><?php echo get_sub_field('content'); ?></p>
                    </div>
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
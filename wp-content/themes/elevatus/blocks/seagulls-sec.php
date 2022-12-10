<?php
    $image_position =  get_field('left_image') == true ? 'left-image' : '';
    $bg_color = get_field('bg_color');
   
?>

<section class="seagulls-sec <?php  echo $image_position;  ?> <?php echo $block['className']; ?>">
    <div class="container d-flex align-center">
        <div class="w-2 content">
            <h3><?php echo get_field('main_title'); ?></h3>

            <div class="d-flex fd-row">
                <?php if( have_rows('counters') ): ?>
                <?php while( have_rows('counters') ): the_row();?>
                <div class="w-2 box">
                    <p class="number"><?php echo get_sub_field('percentage'); ?></p>
                    <h6><?php echo get_sub_field('title'); ?></h6>
                    <p class="light"><?php echo get_sub_field('subtitle'); ?></p>
                </div>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </div>
        <div class="w-2 image">
            <img src="<?php echo get_field('image'); ?>" alt="<?php echo get_field('image'); ?>">
        </div>


    </div>
</section>
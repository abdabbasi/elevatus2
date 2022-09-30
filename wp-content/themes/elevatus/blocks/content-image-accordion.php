<?php 
    $image_position =  get_field('left_image') == true ? 'left-image' :'';
?>


<section
    class="content-image-accordion-sec pt-3 pb-3 mt-3 mb-3 <?php echo get_field('background_color'); ?> <?php echo $image_position; ?>">
    <div class="container">
        <div class="d-flex align-center flex-wrap">
            <div class="w-2 content-side">
                <h3><?php echo get_field('section_title'); ?></h3>
                <p class="sub-heading"><?php echo get_field('section_subtitle'); ?></p>

                <div class="accordion-wrapper pt-2" data-controller="accordion">
                    <?php if( have_rows('accordion') ): ?>
                    <?php while( have_rows('accordion') ): the_row();?>
                    <div class="accordion-container">
                        <button class="title" data-action="accordion#toggle">
                            <?php echo get_sub_field('title'); ?>
                        </button>
                        <p class="content">
                            <?php echo get_sub_field('content'); ?>
                        </p>
                    </div>
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>

            </div>
            <div class="w-2 image">
                <img src="<?php echo get_field('image')['url']; ?>" alt="<?php echo get_field('image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
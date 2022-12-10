<?php 
    $image_position =  get_field('left_image') == true ? 'left-image' :'';
?>


<section
    class="content-image-accordion-sec pt-5 pb-5 <?php echo $image_position; ?> <?php echo get_field('additional_class'); ?>">
    <div class="container">
        <div class="d-flex align-center flex-wrap">
            <div class="w-2 content-side">
                <h3><?php echo get_field('section_title'); ?></h3>
                <p class="sub-heading mb-2"><?php echo get_field('section_subtitle'); ?></p>

                <?php if( have_rows('accordion') ): ?>
                <div class="accordion-wrapper pt-2 mb-2" data-controller="accordion">
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
                </div>
                <?php endif; ?>
                <?php if (get_field('has_button') == true) : ?>
                <a href="<?php echo get_field('button')['url'] ; ?>" class="btn btn-main">
                    <?php echo get_field('button')['title'] ; ?>
                </a>
                <?php endif; ?>
            </div>
            <div class="w-2 image">
                <img src="<?php echo get_field('image')['url']; ?>" alt="<?php echo get_field('image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
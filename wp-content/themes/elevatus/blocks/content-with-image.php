<?php 
    $image_position =  get_field('left_image') == true ? 'left-image' :'';
?>


<section class="content-image-accordion-sec pt-3 pb-3 <?php echo $image_position; ?> <?php echo get_field('additional_classes'); ?>">
    <div class="container">
        <div class="d-flex align-center flex-wrap">
            <div class="w-2 content-side">
                <h4><?php echo get_field('section_title'); ?></h4>
                <p class="light"><?php echo get_field('section_subtitle'); ?></p>
                <a href="<?php echo get_field('button')['url'] ; ?>" class="btn btn-main">
                <?php echo get_field('button')['title'] ; ?>
                </a>
            </div>
            <div class="w-2 image">
                <img src="<?php echo get_field('image')['url']; ?>" alt="<?php echo get_field('image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
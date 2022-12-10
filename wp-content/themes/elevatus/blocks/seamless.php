<?php 
    $image_position =  get_field('image_left') == true ? 'left-image' :'';
?>
<!-- GDPR Section -->
<section class="gdpr-sec seamless pt-3 <?php echo $image_position; ?> <?php echo $block['className']; ?>">
    <div class="container">
        <div class="d-flex flex-wrap align-center">
            <div class="content w-2">
                <h3><?php echo get_field('seamless_title'); ?></h3>
                <p class="pt-1"><?php echo get_field('seamless_subtitle'); ?></p>
                <?php if (get_field('has_button') == true) : ?>
                    <a href="<?php echo get_field('button')['url'] ; ?>" class="btn btn-main">
                        <?php echo get_field('button')['title'] ; ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="image w-2 d-flex j-end pl-5">
                <img class="w-1" class="logo" src="<?php echo get_field('seamless_image')['url']; ?>"
                    alt="<?php echo get_field('seamless_image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
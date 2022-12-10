<!-- Get demo Hero Section -->
<section id="request_demo" class="landing-form-sec <?php echo $block['className']; ?>" style="background-image: url('<?php echo get_field('background_image'); ?>');">
    <div class="container">
        <h2 class="white title w-13"><?php echo get_field('title'); ?></h2>
        <div class="d-flex flex-wrap align-end pt-3">
            <div class="form-wrapper w-2">
                <?php echo do_shortcode(get_field('form_shortcode') );?>
            </div>
            <div class="content w-2">
                <?php echo get_field('content') ;?>
            </div>
        </div>
    </div>
</section>
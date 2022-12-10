<!-- Form Section -->
<section id="request_demo" class="landing-form-sec <?php echo $block['className']; ?>"
    style="background-image: url('<?php echo get_field('form_background_image'); ?>');">
    <div class="container">
        <div class="d-flex j-end flex-wrap">
            <h2 class="white title w-2"><?php echo get_field('form_title'); ?></h2>
            <div class="form-wrapper w-2">
                <?php echo do_shortcode(get_field('form_shortcode') );?>
            </div>
        </div>
    </div>
</section>
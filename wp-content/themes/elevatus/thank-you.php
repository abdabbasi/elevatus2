<?php
    /* Template Name: Thank you */
    get_header();
?>

<section id="demo_calendly">
    <div class="container">
        <div class="box d-flex fd-col flex-wrap">
            <div class="">
                <div class="content pt-2">
                    <h4><?php echo get_field('page_title'); ?></h4>
                    <!-- <p class="sub-title light"><?php echo get_field('page_subtitle'); ?></p> -->
                </div>
            </div>
            <div class=" ">
                <iframe
                    src="https://calendly.com/elevatus/get-to-know-you-elevatus?embed_domain=www.elevatus.io&amp;embed_type=Inline&amp;hide_gdpr_banner=1"
                    width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>


<main id="primary" class="site-main <?php echo get_field('additional_classes'); ?>">
    <?php the_content(); ?>
</main><!-- #main -->



<?php
get_footer();
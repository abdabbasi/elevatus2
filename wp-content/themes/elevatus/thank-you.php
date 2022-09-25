<?php
    /* Template Name: Thank you */
    get_header();
?>

<section id="demo_calendly">
    <div class="container">
        <div class="box d-flex flex-wrap">
            <div class="w-8">
                <div class="content pt-2">
                    <h4><?php echo get_field('page_title'); ?></h4>
                    <p class="sub-title light"><?php echo get_field('page_subtitle'); ?></p>
                </div>
            </div>
            <div class="w-18 vh-1">
                <iframe
                    src="https://calendly.com/elevatus/get-to-know-you-elevatus?embed_domain=www.elevatus.io&amp;embed_type=Inline&amp;hide_gdpr_banner=1"
                    width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Companies Logos -->
<section class="company-logos pt-3 pb-3">
    <div class="container">
        <h4><?php echo get_field('company_logos_title'); ?></h4>
        <div class="logos d-flex flex-wrap align-center pt-2">
            <?php if( have_rows('company_logos') ): ?>
            <?php while( have_rows('company_logos') ): the_row();?>
            <div class="w-6">
                <img src="<?php echo get_sub_field('logo')['url']; ?>"
                    alt="<?php echo get_sub_field('logo')['alt']; ?>">
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<?php include get_theme_file_path('/inc/testimonials-sec.php'); ?>

<!-- CTA Section -->
<?php include get_theme_file_path('/inc/cta-section.php'); ?>

<?php
get_footer();
<?php
    /* Template Name: Homepage */
    get_header();
?>
<!-- Header -->
<section class="header-sec">
    <div class="container h-1">
        <div class="d-flex flex-wrap align-center">
            <div class="w-2 content">
                <h1><?php echo get_field('header_title'); ?></h1>
                <p class="subtitle"><?php echo get_field('header_subtitle'); ?></p>
                <a class="btn btn-main"
                    href="<?php echo get_field('header_button')['url']; ?>"><?php echo get_field('header_button')['title']; ?></a>
                <img src="<?php echo get_field('header_logos')['url']; ?>"
                    alt="<?php echo get_field('header_logos')['alt']; ?>">
            </div>
            <div class="w-2 image">
                <img src="<?php echo get_field('header_image')['url']; ?>"
                    alt="<?php echo get_field('header_image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>

<div>
    <?php echo the_content(); ?>
</div>

<!-- CTA Section -->
<?php include get_theme_file_path('/inc/cta-section.php'); ?>

<?php
get_footer();
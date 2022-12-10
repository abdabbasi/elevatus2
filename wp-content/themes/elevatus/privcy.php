<?php
    /* Template Name: Privacy Police */
    get_header();
?>

<main class="privacy-page has-side-menu <?php echo get_field('additional_classes'); ?>">
    <!-- Header -->
    <section class="privacy-header">
        <div class="container">
            <div class="d-flex align-center">
                <img class="pr-1" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                <h1>Legal</h1>
            </div>
        </div>
    </section>
    
    <section class="content-wrapper" data-controller="sidemenu">
        <div class="container">
            <div class="d-flex">
                <div class="w-3 side-menu on-desktop">

                </div>
                <div class="w-13 content-side">
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
get_footer();
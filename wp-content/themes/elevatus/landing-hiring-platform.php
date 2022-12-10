<?php
    /* Template Name: Landing Hiring Platform */
    get_header();
?>
    <div class="landing landing-hiring-platform <?php echo get_field('additional_classes'); ?>">

        <!-- Header -->
        <section class="header-sec vh-1 p-rel">
            <div class="container h-1">
                <div class="d-flex flex-wrap align-center h-1">
                    <div class="w-2">
                        <h1><?php echo get_field('page_title'); ?></h1>
                        <h4 class="light"><?php echo get_field('page_subtitle'); ?></h4>
                        <a class="btn btn-main" href="<?php echo get_field('header_button')['url']; ?>"><?php echo get_field('header_button')['title']; ?></a>
                    </div>
                    <div class="w-2 image">
                        <img src="<?php echo get_field('header_image')['url']; ?>" alt="<?php echo get_field('header_image')['alt']; ?>">
                    </div>
                </div>
            </div>
        </section>

        <!-- Companies Logos -->
        <section class="company-logos pt-3 pb-3">
            <div class="container">
                <h3><?php echo get_field('company_logos_title'); ?></h3>
                <div class="w-14 company-logos-slider splide pt-2 pb-2" role="group" aria-label="Company logos Slider">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php if( have_rows('company_logos', 'option') ): ?>
                            <?php while( have_rows('company_logos', 'option') ): the_row();?>
                            <li class="splide__slide">
                                <div class="h-1 logos d-flex align-center j-center">
                                    <img src="<?php echo get_sub_field('logo', 'option')['url']; ?>"
                                        alt="<?php echo get_sub_field('logo', 'option')['alt']; ?>">
                                </div>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Features Section -->
        <section class="features-sec pt-3 pb-3">
            <div class="container">
                <h3><?php echo get_field('features_title'); ?></h3>
                <div class="boxes d-flex flex-wrap j-sb pt-1">
                <?php if( have_rows('features_boxes') ): ?>
                    <?php while( have_rows('features_boxes') ): the_row();?>
                        <div class="box">
                            <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>">
                            <h5 class="title"><?php echo get_sub_field('title'); ?></h5>
                            <p class="content"><?php echo get_sub_field('content'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Recruit Section -->
        <section class="recruit-list-sec mt-2 mb-2" style="background-image: url('<?php echo get_field('background_image'); ?>')">
            <div class="container">
                <div class="d-flex j-end align-center">
                    <div class="content w-2 pl-3 pt-3">
                        <h3 class="white"><?php echo get_field('recruit_title'); ?></h3>
                        <div class="list pt-2">
                        <?php if( have_rows('list_features') ): ?>
                            <?php while( have_rows('list_features') ): the_row();?>
                                <div class="row d-flex align-center">
                                    <img src="<?php echo site_url('/wp-content/themes/elevatus/assets/images/tick-with-circal.svg'); ?>" alt="tick-icon">
                                    <?php echo get_sub_field('content'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
        
        <div>
            <?php echo the_content(); ?>
        </div>
        
        <!-- CTA Section -->
        <?php include get_theme_file_path('/inc/cta-section.php'); ?>
    </div>


<?php
get_footer();
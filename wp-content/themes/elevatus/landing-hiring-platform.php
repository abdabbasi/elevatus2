<?php
    /* Template Name: Landing Hiring Platform */
    get_header();
?>
    <div class="landing landing-hiring-platform">

        <!-- Header -->
        <section class="header-sec vh-1">
            <div class="container h-1">
                <div class="d-flex flex-wrap align-center h-1">
                    <div class="w-2">
                        <h1><?php echo get_field('page_title'); ?></h1>
                        <h4 class="sub-title light"><?php echo get_field('page_subtitle'); ?></h4>
                        <a class="btn btn-main" href="<?php echo get_field('header_button')['url']; ?>"><?php echo get_field('header_button')['title']; ?></a>
                    </div>
                    <div class="w-2 h1">
                        <img src="<?php echo get_field('header_image')['url']; ?>" alt="<?php echo get_field('header_image')['alt']; ?>">
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

        <!-- Companies Logos -->
        <section class="company-logos pt-3 pb-3">
            <div class="container">
                <h3><?php echo get_field('company_logos_title'); ?></h3>
                <div class="logos d-flex flex-wrap align-center pt-2">
                <?php if( have_rows('company_logos') ): ?>
                    <?php while( have_rows('company_logos') ): the_row();?>
                        <div class="w-6">
                            <img src="<?php echo get_sub_field('logo')['url']; ?>" alt="<?php echo get_sub_field('logo')['alt']; ?>">
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

        <!-- Integrations Slider Section -->
        <?php include get_theme_file_path('/inc/integration-slider.php'); ?>
        
        <!-- GDPR Section -->
        <section class="gdpr-sec pt-3 pb-3">
            <div class="container">
                <div class="d-flex flex-wrap align-center">
                    <div class="content w-13 pr-4">
                        <h4><?php echo get_field('gdpr_title'); ?></h4>
                        <p><?php echo get_field('gdpr_content'); ?></p>
                    </div>
                    <div class="w-3 d-flex j-end">
                        <img class="logo" src="<?php echo get_field('gdpr_image')['url']; ?>" alt="<?php echo get_field('gdpr_image')['alt']; ?>">
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <?php include get_theme_file_path('/inc/testimonials-sec.php'); ?>
    
        <!-- Form Section -->
        <section id="request_demo" class="form-sec mt-3" style="background-image: url('<?php echo get_field('form_background_image'); ?>');">
            <div class="container">
                <div class="d-flex j-end align-center">
                    <div class="form-wrapper">
                        <h3><?php echo get_field('form_title'); ?></h3>
                        <?php echo do_shortcode(get_field('form_shortcode') );?>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- CTA Section -->
        <?php include get_theme_file_path('/inc/cta-section.php'); ?>
    
        <div>
            <?php echo the_content(); ?>
        </div>
    </div>


<?php
get_footer();
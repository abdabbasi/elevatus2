<?php
    /* Template Name: Landing Advanced Hiring Platform */
    get_header();
?>
<div class="landing landing-advanced-hiring-platform">

    <!-- Header -->
    <section class="header-sec vh-1">
        <div class="container h-1">
            <div class="row-1 d-flex flex-wrap">
                <div class="w-13">
                    <h1><?php echo get_field('page_title'); ?></h1>
                    <a class="btn btn-main"
                        href="<?php echo get_field('header_button')['url']; ?>"><?php echo get_field('header_button')['title']; ?></a>
                </div>
                <div class="w-3 image">
                    <img src="<?php echo get_field('header_image')['url']; ?>"
                        alt="<?php echo get_field('header_image')['alt']; ?>">
                </div>
            </div>
            <div class="row-2 d-flex flex-wrap align-center">
                <div class="w-3 image">
                    <img src="<?php echo get_field('header_image_2')['url']; ?>"
                        alt="<?php echo get_field('header_image_2')['alt']; ?>">
                </div>
                <div class="content w-13 pl-5">
                    <h4 class="sub-title mb-2"><?php echo get_field('page_subtitle'); ?></h4>
                    <p class="small-text"><?php echo get_field('small_text'); ?></p>
                    <img src="<?php echo get_field('header_logos')['url']; ?>"
                        alt="<?php echo get_field('header_logos')['alt']; ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-sec pt-3 pb-3">
        <div class="container">
            <h3 class="text-center"><?php echo get_field('features_title'); ?></h3>
            <div class="boxes d-flex flex-wrap j-sb pt-2">
                <?php if( have_rows('features_boxes') ): ?>
                <?php while( have_rows('features_boxes') ): the_row();?>
                <div class="box w-3">
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
            <h4 class="text-center"><?php echo get_field('company_logos_title'); ?></h4>
            <div class="logos d-flex flex-wrap align-center pt-2 j-center">
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

    <!-- Advanced Features Section -->
    <section class="advanced-sec pt-3 pb-3">
        <div class="container">
            <div class="d-flex flex-wrap">
                <div class="w-2 left-side">
                    <div class="boxes d-flex flex-wrap">
                        <?php if( have_rows('list_advanced_features') ): ?>
                        <?php while( have_rows('list_advanced_features') ): the_row();?>
                        <div class="box">
                            <img src="<?php echo get_sub_field('icon')['url']; ?>"
                                alt="<?php echo get_sub_field('icon')['alt']; ?>">
                            <h5 class="title"><?php echo get_sub_field('title'); ?></h5>
                            <p class="content"><?php echo get_sub_field('content'); ?></p>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="w-2 right-side">
                    <h3><?php echo get_field('advanced_features_title'); ?></h3>
                    <img src="<?php echo get_field('advanced_features_image')['url']; ?>"
                        alt="<?php echo get_field('advanced_features_image')['alt']; ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <?php include get_theme_file_path('/inc/testimonials-sec.php'); ?>

    <!-- Integrations Slider Section -->
    <?php include get_theme_file_path('/inc/integration-slider.php'); ?>

    <!-- Awards Section -->
    <section class="awards-sec pt-3 pb-3">
        <div class="container">
            <h4 class><?php echo get_field('awards_title'); ?></h4>
            <div class="d-flex flex-wrap pt-2">
                <div class="w-2 d-flex flex-wrap">
                    <div class="w-2 box">
                        <?php
                            $box_1 = get_field('box_1');
                            if( $box_1 ): ?>
                        <div class="box-wrapper">
                            <img class="logo" src="<?php echo $box_1['logo']; ?>" alt="" />
                            <p class="year"><?php echo $box_1['year']; ?></p>
                            <p class="name"><?php echo $box_1['name']; ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="w-2 box">
                        <?php
                            $box_2 = get_field('box_2');
                            if( $box_2 ): ?>
                        <div class="box-wrapper">
                            <img class="logo" src="<?php echo $box_2['logo']; ?>" alt="" />
                            <p class="year"><?php echo $box_2['year']; ?></p>
                            <p class="name"><?php echo $box_2['name']; ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="w-1 box">
                        <?php
                            $box_3 = get_field('box_3');
                            if( $box_3 ): ?>
                        <div class="box-wrapper">
                            <img class="logo" src="<?php echo $box_3['logo']; ?>" alt="" />
                            <p class="year"><?php echo $box_3['year']; ?></p>
                            <p class="name"><?php echo $box_3['name']; ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="w-2 box big-box">
                    <?php
                        $box_4 = get_field('box_4');
                        if( $box_4 ): ?>
                    <div class="box-wrapper d-flex align-center j-center fd-col">
                        <img class="logo" src="<?php echo esc_url( $box_4['logo']['url'] ); ?>"
                            alt="<?php echo esc_attr( $box_4['logo']['alt'] ); ?>" />
                        <p class="year text-center"><?php echo $box_4['year']; ?></p>
                        <p class="name text-center"><?php echo $box_4['name']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- GDPR Section -->
    <section class="gdpr-sec pt-5 pb-5">
        <div class="container">
            <div class="d-flex flex-wrap align-center">
                <div class="content w-13 pr-4">
                    <h4><?php echo get_field('gdpr_title'); ?></h4>
                    <p><?php echo get_field('gdpr_content'); ?></p>
                </div>
                <div class="w-3 d-flex j-end">
                    <img class="logo" src="<?php echo get_field('gdpr_image')['url']; ?>"
                        alt="<?php echo get_field('gdpr_image')['alt']; ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section id="request_demo" class="form-sec"
        style="background-image: url('<?php echo get_field('form_background_image'); ?>');">
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
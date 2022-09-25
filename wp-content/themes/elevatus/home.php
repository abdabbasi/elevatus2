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

<!-- Features Section -->
<section class="features-sec pt-3 pb-3">
    <div class="container">
        <h3 class="text-center"><?php echo get_field('features_title'); ?></h3>
        <div class="boxes d-flex flex-wrap j-sb pt-2">
            <?php if( have_rows('features_boxes') ): ?>
            <?php while( have_rows('features_boxes') ): the_row();?>
            <div class="box w-3">
                <p class="content"><?php echo get_sub_field('content'); ?></p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="pt-3 pb-3">
    <div class="container">
        <h3 class="text-center"><?php echo get_field('product_section_title'); ?></h3>
    </div>
</section>
<!-- Eva-rec Section -->
<section class="products-sec eva-rec pt-3">
    <div class="container">
        <div class="d-flex flex-wrap align-center">
            <div class="w-2 content">
                <img class="logo" src="<?php echo get_field('eva_rec_logo')['url']; ?>"
                    alt="<?php echo get_field('eva_rec_logo')['alt']; ?>">
                <h3><?php echo get_field('eva_rec_title'); ?></h3>
                <div class="content">
                    <?php echo get_field('eva_rec_content'); ?>
                </div>
                <a class="btn-link"
                    href="<?php echo get_field('eva_rec_button')['url']; ?>"><?php echo get_field('eva_rec_button')['title']; ?></a>
            </div>
            <div class="w-2 side-img">
                <img src="<?php echo get_field('eva_rec_side_image')['url']; ?>"
                    alt="<?php echo get_field('eva_rec_side_image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
<!-- EVA-SSESS Section -->
<section class="products-sec eva-ssess">
    <div class="container">
        <div class="d-flex flex-wrap align-center">
            <div class="w-2 content">
                <img class="logo" src="<?php echo get_field('eva_ssess_logo')['url']; ?>"
                    alt="<?php echo get_field('eva_ssess_logo')['alt']; ?>">
                <h3><?php echo get_field('eva_ssess_title'); ?></h3>
                <div class="content">
                    <?php echo get_field('eva_ssess_content'); ?>
                </div>
                <a class="btn-link"
                    href="<?php echo get_field('eva_ssess_button')['url']; ?>"><?php echo get_field('eva_ssess_button')['title']; ?></a>
            </div>
            <div class="w-2 side-img">
                <img src="<?php echo get_field('eva_ssess_image')['url']; ?>"
                    alt="<?php echo get_field('eva_ssess_image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
<!-- EVA-Board Section -->
<section class="products-sec eva-board">
    <div class="container h-1">
        <div class="d-flex flex-wrap align-center h-1">
            <div class="w-2 content">
                <img class="logo" src="<?php echo get_field('eva_board_logo')['url']; ?>"
                    alt="<?php echo get_field('eva_board_logo')['alt']; ?>">
                <h3><?php echo get_field('eva_board_title'); ?></h3>
                <div class="content">
                    <?php echo get_field('eva_board_content'); ?>
                </div>
                <a class="btn-link"
                    href="<?php echo get_field('eva_board_button')['url']; ?>"><?php echo get_field('eva_board_button')['title']; ?></a>
            </div>
            <div class="w-2 side-img">
                <img src="<?php echo get_field('eva_board_side_image')['url']; ?>"
                    alt="<?php echo get_field('eva_board_side_image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>

<!-- Features2 Section -->
<section class="features2-sec pt-3 pb-3">
    <div class="container">
        <h4><?php echo get_field('features2_title'); ?></h4>
        <div class="boxes d-flex flex-wrap j-sb pt-1">
            <?php if( have_rows('features2_boxes') ): ?>
            <?php while( have_rows('features2_boxes') ): the_row();?>
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
</section>

<!-- GDPR Section -->
<section class="gdpr-sec pt-3">
    <div class="container">
        <div class="d-flex flex-wrap align-center">
            <div class="content w-2">
                <h4><?php echo get_field('seamless_title'); ?></h4>
                <p><?php echo get_field('seamless_subtitle'); ?></p>
            </div>
            <div class="image w-2 d-flex j-end pl-5">
                <img class="w-1" class="logo" src="<?php echo get_field('seamless_image')['url']; ?>"
                    alt="<?php echo get_field('seamless_image   ')['alt']; ?>">
            </div>
        </div>
    </div>
</section>

<!-- Integrations Slider Section -->
<section class="integrations-sec pb-3">
    <div class="splide integrations-slider pt-2">
        <div class="splide__track">
            <ul class="splide__list">
                <?php if( have_rows('integrations_slider', 'option') ): ?>
                <?php while( have_rows('integrations_slider', 'option') ): the_row();?>
                <li class="splide__slide">
                    <div class="slide">
                        <img class="logo" src="<?php echo get_sub_field('logo', 'option')['url']; ?>"
                            alt="<?php echo get_sub_field('logo', 'option')['alt']; ?>">
                        <p class="title"><?php echo get_sub_field('title', 'option'); ?></p>
                        <p class="content"><?php echo get_sub_field('content', 'option'); ?></p>
                        <a href="<?php echo get_sub_field('link', 'option'); ?>"><img
                                src="<?php echo site_url('/wp-content/themes/elevatus/assets/images/arrow-up-right.svg'); ?>"
                                alt="arrow-up-right"></a>
                    </div>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="awards-sec pt-3 pb-3">
    <div class="container">
        <div class="d-flex flex-wrap pt-2">
            <div class="w-2 box big-box">
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
            <div class="w-2 d-flex flex-wrap">
                <div class="w-1 box">
                    <?php
                            $box_2 = get_field('box_2');
                            if( $box_2 ): ?>
                    <div class="box-wrapper d-flex align-center j-center fd-col">
                        <img class="logo" src="<?php echo $box_2['logo']; ?>" alt="" />
                        <p class="year text-center"><?php echo $box_2['year']; ?></p>
                        <p class="name text-center"><?php echo $box_2['name']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="w-2 box">
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
                <div class="w-2 box">
                    <?php
                    $box_4 = get_field('box_4');
                    if( $box_4 ): ?>
                    <div class="box-wrapper">
                        <img class="logo" src="<?php echo esc_url( $box_4['logo']['url'] ); ?>"
                            alt="<?php echo esc_attr( $box_4['logo']['alt'] ); ?>" />
                        <p class="year"><?php echo $box_4['year']; ?></p>
                        <p class="name"><?php echo $box_4['name']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<?php include get_theme_file_path('/inc/testimonials-sec-2.php'); ?>

<!-- Explore platform Section -->
<section class="explore-sec pt-3 pb-4">
    <div class="container">
        <h3><?php echo get_field('explore_title'); ?></h3>
        <div class="d-flex j-sb pt-1">
            <?php if( have_rows('explore_boxes') ): ?>
            <?php while( have_rows('explore_boxes') ): the_row();?>
            <div class="box d-flex fd-col j-sb">
                <div class="content">
                    <img class="logo" src="<?php echo get_sub_field('logo')['url']; ?>"
                        alt="<?php echo get_sub_field('logo')['alt']; ?>">
                    <p class="title"><?php echo get_sub_field('content'); ?></p>
                    <a class="link" href="<?php echo get_sub_field('link')['url']; ?>"><img
                            src="<?php echo site_url('/wp-content/themes/elevatus/assets/images/arrow-right-xl.svg'); ?>"
                            alt="arrow-up-right"></a>
                </div>
                <img class="image" src="<?php echo get_sub_field('image')['url']; ?>"
                    alt="<?php echo get_sub_field('image')['alt']; ?>">
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<?php include get_theme_file_path('/inc/cta-section.php'); ?>

<div>
    <?php echo the_content(); ?>
</div>


<?php
get_footer();
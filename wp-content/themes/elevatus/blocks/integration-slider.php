<section class="integrations-sec pb-3 <?php echo $block['className']; ?>">
    <div class="container">
        <p class="sub-heading pt-3 on-desktop on-mobile"><?php echo get_field('integrations_title', 'option'); ?></p>
    </div>
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
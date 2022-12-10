<!-- Companies Logos -->
<section class="company-logos pt-3 pb-3 <?php echo $block['className']; ?>">
    <div class="container">
        <h4 class="text-center"><?php echo get_field('company_logos_title', 'option'); ?></h4>
        <div class="w-14 m-auto company-logos-slider splide pt-2 pb-2" role="group" aria-label="Company logos Slider">
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
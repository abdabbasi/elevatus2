<section class="testimonial-sec pb-3 <?php echo $block['className']; ?>">
    <div class="container pt-3 pb-3">
        <h4><?php echo get_field('testimonial_title', 'option'); ?></h4>
        <div class="splide testimonials-slider pt-3">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php if( have_rows('testimonial_slider', 'option') ): ?>
                    <?php while( have_rows('testimonial_slider', 'option') ): the_row();?>
                    <li class="splide__slide slide">
                        <div class="d-flex flex-wrap">
                            <div class="w-3">
                                <img src="<?php echo get_sub_field('image', 'option')['url']; ?>" alt="<?php echo get_sub_field('image', 'option')['alt']; ?>">
                            </div>
                            <div class="w-13">
                                <p class="company"><?php echo get_sub_field('company_name', 'option'); ?></p>
                                <div class="content"><?php echo get_sub_field('content', 'option'); ?></div>
                                <h4 class="name m-0"><?php echo get_sub_field('person_name', 'option'); ?></h4>
                                <p class="position m-0"><?php echo get_sub_field('position', 'option'); ?></p>
                            </div>
                        </div>                      
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>


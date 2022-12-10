<section class="our-team-sec <?php echo $block['className']; ?>">
    <div class="container pt-3 pb-3">
        <h2><?php echo get_field('title', 'option'); ?></h2>
        <div class="splide our-team-slider pt-3 pb-3">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php if( have_rows('members', 'option') ): ?>
                    <?php while( have_rows('members', 'option') ): the_row();?>
                    <li class="splide__slide">
                        <div class="slide">
                                <img src="<?php echo get_sub_field('image', 'option')['url']; ?>" alt="<?php echo get_sub_field('image', 'option')['alt']; ?>">
                                <h4 class="sub-heading m-0"><?php echo get_sub_field('name', 'option'); ?></h4>
                                <p class="light m-0"><?php echo get_sub_field('position', 'option'); ?></p>
                        </div>                      
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="image-with-counters-sec pt-3 pb-3 mt-3 <?php echo $block['className']; ?>">
    <div class="container">

        <div class="content w-13">
            <h3><?php echo get_field('section_title'); ?></h3>
            <p>  <?php echo get_field('section_subtitle'); ?></p>
        </div>

        <div class="img-counters-container mt-2 j-">

            <div class="image-container d-flex">
                <img src="<?php echo get_field('image')['url']; ?>" alt="<?php echo get_field('image')['alt']; ?>">
            </div>

            <div class="counters d-flex flex-wrap pt-2 pb-2">
            <?php if( have_rows('counters') ): ?>
            <?php while( have_rows('counters') ): the_row();?>

                <div class="counter w-2 d-flex fd-col  pl-2 pr-2 ">
                    <h6 class="m-0 mb-1"><?php echo get_sub_field('title'); ?></h6>
                    <p class="m-0 mb-1"><?php echo get_sub_field('subtitle'); ?></p>
                </div>

            <?php endwhile; ?>
            <?php endif; ?>
            </div>

        </div>

    </div>
</section>
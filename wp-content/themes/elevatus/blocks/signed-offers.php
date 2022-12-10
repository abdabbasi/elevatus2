<section class="signed-offers-sec pt-3 pb-3 <?php echo $block['className']; ?>" style="background-image: url('<?php echo get_field('background_image')  ?>')">
    <div class="container">

        <div class="d-flex flex-wrap">
            <div class="w-2 image">
                <img src="<?php echo get_field('image')['url']; ?>" alt="<?php echo get_field('image')['alt']; ?>">
            </div>
            <div class="w-2 content">
                <h3 class="white"><?php echo get_field('section_title'); ?></h3>
                <p class="white"><?php echo get_field('description'); ?></p>
                <h5 class="white">
                    <strong><?php echo get_field('subtitle'); ?></strong>
                </h5>
            </div>
        </div>

    </div>
</section>
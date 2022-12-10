<section class="hero-sec <?php echo $block['className']; ?>">
    <div class="container">
        <div>
            <div>
                <h2><?php echo get_field('main_title'); ?></h2>
                <a href="<?php echo get_field('button')['url'] ?>" class="btn btn-main"><?php echo get_field('button')['url']; ?> </a>
            </div>
            <div class="image">
                <img loading="lazy" src="<?php echo get_field('main_image')['url']; ?>" alt="<?php echo get_field('main_image')['alt']; ?>">
            </div>
        </div>

        <div>
            <div class="image">
                <img  loading="lazy"  src="<?php echo get_field('sub_image')['url']; ?>" alt="<?php echo get_field('sub_image')['alt']; ?>">
            </div>
            <div>
                <p><?php echo get_field('description'); ?></p>
                <p><?php echo get_field('sub_description'); ?></p>
            </div>
        </div>
    </div>
</section>
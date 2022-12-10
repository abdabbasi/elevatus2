<section class="advantages-sec pt-4 pb-4 <?php echo $block['className']; ?>">
    <div class="container">
        <div class="top d-flex flex-wrap">
            <div class="w-3 pt-1">
                <h3 class="mt-0"><?php echo get_field('top_main_title'); ?></h3>
            </div>
            <div class="w-13 d-flex flex-wrap pl-2 pt-2">
                <?php if( have_rows('single_advantage') ): ?>
                <?php while( have_rows('single_advantage') ): the_row();?>
                <div class="w-2 pl-4 pr-4 mb-2">
                    <div class="image">
                        <img src="<?php echo get_sub_field('image_icon')['url']; ?>"
                            alt="<?php echo get_sub_field('image_icon')['alt']; ?>">
                    </div>
                    <h3><?php echo get_sub_field('title'); ?></h3>
                    <p class="small-text light"> <?php echo get_sub_field('subtitle'); ?></p>
                </div>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </div>
        <div class="bottom mt-3">
            <h4 class="mt-3"><?php echo get_field('bottom_main_title'); ?></h4>
            <a href="<?php echo get_field('button')['url']?>" class="btn btn-main">
                <?php echo get_field('button')['title'] ; ?>
            </a>
        </div>
    </div>
</section>
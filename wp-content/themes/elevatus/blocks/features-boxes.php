<!-- Features2 Section -->
<section class="features2-sec pt-3 pb-3 <?php echo $block['className']; ?>">
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
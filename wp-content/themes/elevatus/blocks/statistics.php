<section class="statistics-sec pt-3 pb-3 mt-3 mb-3 <?php echo $block['className']; ?>">
    <div class="container">
        <div class="d-flex flex-wrap">
            <div class="w-3">
                <h2><?php echo get_field('title'); ?></h2>
            </div>
            <div class="list w-13 pt-5">
                <div class="d-flex flex-wrap">
                    <?php if( have_rows('statistics') ): ?>
                    <?php while( have_rows('statistics') ): the_row();?>
                    <div class="w-2 box">
                        <p class="number"><?php echo get_sub_field('number'); ?></p>
                        <p class="sub-title light"><?php echo get_sub_field('content'); ?></p>
                    </div>
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
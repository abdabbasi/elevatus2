<section class="candles-sec pt-3 pb-3 <?php echo $block['className']; ?>">
    <div class="container">
        <div>
            <h3 class="h3"><?php echo get_field('title'); ?></h3>
        </div>
        <div class="d-flex flex-wrap j-sb pt-2">
            <?php if( have_rows('candles') ): ?>
            <?php while( have_rows('candles') ): the_row();?>
            <div class="box">
                <div class="box-wrapper d-flex fd-col j-end">
                    <div class="percentage" style="height: <?php echo get_sub_field('percentage'); ?>;">
                        <p>
                            <?php echo get_sub_field('percentage'); ?>
                        </p>
                    </div>
                </div>
                <h5 class="text"><?php echo  get_sub_field('description') ?></h5>
            </div>
            <?php endwhile;?>
            <?php endif; ?>
        </div>
    </div>
</section>
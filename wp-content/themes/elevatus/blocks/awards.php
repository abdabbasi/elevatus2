<section class="awards-sec pt-3 pb-3 <?php echo $block['className']; ?>">
    <div class="container">
        <h4><?php echo get_field('awards_title', 'option'); ?></h4>
        <div class="d-flex flex-wrap pt-2">
            <div class="w-2 box big-box">
                <?php
                    $box_1 = get_field('box_1', 'option');
                    if( $box_1 ): 
                ?>
                <div class="box-wrapper">
                    <img class="logo" src="<?php echo $box_1['logo']; ?>" alt="" />
                    <p class="year"><?php echo $box_1['year']; ?></p>
                    <p class="name"><?php echo $box_1['name']; ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="other d-flex flex-wrap">
                <?php if( have_rows('awards_listing', 'option') ): ?>
                <?php while( have_rows('awards_listing', 'option') ): the_row();?>
                    <div class="w-3 box">
                        <div class="box-wrapper d-flex align-center j-center fd-col">
                            <img class="logo" src="<?php echo get_sub_field('image', 'option'); ?>"
                                alt="<?php echo get_sub_field('description', 'option'); ?>" />
                            <p class="name"><?php echo get_sub_field('description', 'option'); ?></p>
                            <p class="year"><?php echo get_sub_field('year', 'option'); ?></p>
                        </div>
                    </div>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="awards-sec custom pt-3 pb-3 <?php echo $block['className']; ?>">
    <div class="container">
        <h4><?php echo get_field('awards_title', 'option'); ?></h4>
        <div class="d-flex flex-wrap pt-2">
            <div class="w-2">
                <div class="list-boxes d-flex flex-wrap">
                    <?php if( have_rows('boxes') ): ?>
                    <?php while( have_rows('boxes') ): the_row();?>
                    <div class="w-2 box">
                        <div class="box-wrapper">
                            <p class="number"><?php echo get_sub_field('number'); ?></p>
                            <p class="name"><?php echo get_sub_field('content'); ?></p>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php endif; ?>
                    <div class="w-2">

                    </div>
                </div>
            </div>
            <div class="w-2 d-flex flex-wrap">
                <div class="w-1 box">
                    <?php
                            $box_2 = get_field('box_2', 'option');
                            if( $box_2 ): ?>
                    <div class="box-wrapper d-flex align-center j-center fd-col">
                        <img class="logo" src="<?php echo $box_2['logo']; ?>" alt="" />
                        <p class="year text-center"><?php echo $box_2['year']; ?></p>
                        <p class="name text-center"><?php echo $box_2['name']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="w-2 box">
                    <?php
                            $box_3 = get_field('box_3', 'option');
                            if( $box_3 ): ?>
                    <div class="box-wrapper">
                        <img class="logo" src="<?php echo $box_3['logo']; ?>" alt="" />
                        <p class="year"><?php echo $box_3['year']; ?></p>
                        <p class="name"><?php echo $box_3['name']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="w-2 box">
                    <?php
                    $box_4 = get_field('box_4', 'option');
                    if( $box_4 ): ?>
                    <div class="box-wrapper">
                        <img class="logo" src="<?php echo esc_url( $box_4['logo']['url'] ); ?>"
                            alt="<?php echo esc_attr( $box_4['logo']['alt'] ); ?>" />
                        <p class="year"><?php echo $box_4['year']; ?></p>
                        <p class="name"><?php echo $box_4['name']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
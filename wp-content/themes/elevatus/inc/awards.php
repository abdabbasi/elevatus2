<section class="awards-sec pt-3 pb-3">
    <div class="container">
        <div class="d-flex flex-wrap pt-2">
            <div class="w-2 box big-box">
                <?php
                            $box_1 = get_field('box_1', 'option');
                            if( $box_1 ): ?>
                <div class="box-wrapper">
                    <img class="logo" src="<?php echo $box_1['logo']; ?>" alt="" />
                    <p class="year"><?php echo $box_1['year']; ?></p>
                    <p class="name"><?php echo $box_1['name']; ?></p>
                </div>
                <?php endif; ?>
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
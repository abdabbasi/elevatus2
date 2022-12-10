<!-- Products Section -->
<section class="pt-3 pb-3">
    <div class="container">
        <h3 class="text-center"><?php echo get_field('product_section_title'); ?></h3>
    </div>
</section>
<!-- Eva-rec Section -->
<section class="products-sec eva-rec pt-3">
    <div class="container">
        <div class="d-flex flex-wrap align-center">
            <div class="w-2 content">
                <img class="logo" src="<?php echo get_field('eva_rec_logo')['url']; ?>"
                    alt="<?php echo get_field('eva_rec_logo')['alt']; ?>">
                <h3><?php echo get_field('eva_rec_title'); ?></h3>
                <div class="content">
                    <?php echo get_field('eva_rec_content'); ?>
                </div>
                <a class="btn-link"
                    href="<?php echo get_field('eva_rec_button')['url']; ?>"><?php echo get_field('eva_rec_button')['title']; ?></a>
            </div>
            <div class="w-2 side-img">
                <img src="<?php echo get_field('eva_rec_side_image')['url']; ?>"
                    alt="<?php echo get_field('eva_rec_side_image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
<!-- EVA-SSESS Section -->
<section class="products-sec eva-ssess">
    <div class="container">
        <div class="d-flex flex-wrap align-center">
            <div class="w-2 content">
                <img class="logo" src="<?php echo get_field('eva_ssess_logo')['url']; ?>"
                    alt="<?php echo get_field('eva_ssess_logo')['alt']; ?>">
                <h3><?php echo get_field('eva_ssess_title'); ?></h3>
                <div class="content">
                    <?php echo get_field('eva_ssess_content'); ?>
                </div>
                <a class="btn-link"
                    href="<?php echo get_field('eva_ssess_button')['url']; ?>"><?php echo get_field('eva_ssess_button')['title']; ?></a>
            </div>
            <div class="w-2 side-img">
                <img src="<?php echo get_field('eva_ssess_image')['url']; ?>"
                    alt="<?php echo get_field('eva_ssess_image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
<!-- EVA-Board Section -->
<section class="products-sec eva-board">
    <div class="container h-1">
        <div class="d-flex flex-wrap align-center h-1">
            <div class="w-2 content">
                <img class="logo" src="<?php echo get_field('eva_board_logo')['url']; ?>"
                    alt="<?php echo get_field('eva_board_logo')['alt']; ?>">
                <h3><?php echo get_field('eva_board_title'); ?></h3>
                <div class="content">
                    <?php echo get_field('eva_board_content'); ?>
                </div>
                <a class="btn-link"
                    href="<?php echo get_field('eva_board_button')['url']; ?>"><?php echo get_field('eva_board_button')['title']; ?></a>
            </div>
            <div class="w-2 side-img">
                <img src="<?php echo get_field('eva_board_side_image')['url']; ?>"
                    alt="<?php echo get_field('eva_board_side_image')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
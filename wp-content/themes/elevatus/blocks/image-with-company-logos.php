<!-- Image with Companies Logos -->
<section class="image-company-logos <?php echo $block['className']; ?>">
    <div class="container d-flex">

        <div class="w-3 image-container">
            <img class="w-1" src="<?php echo get_field('image')['url']; ?>" alt="<?php echo get_field('image')['url']; ?>">
        </div>

        <div class="w-13 content d-flex fd-col align-start j-center pl-4">
            <h4 class="m-0"><?php echo get_field('title'); ?></h4>
            <h6 class="m-0 pt-1"><?php echo get_field('subtitle'); ?></h6>
            <div class="logos d-flex flex-wrap align-center j-between pt-1">
                <?php if( have_rows('companies_logos') ): ?>
                <?php while( have_rows('companies_logos') ): the_row();?>
                <div class="pr-2">
                    <img src="<?php echo get_sub_field('logo')['url']; ?>"
                        alt="<?php echo get_sub_field('logo')['alt']; ?>">
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
<!-- Features Section -->
<section class="features-sec three-col pt-3 pb-3">
    <div class="container">
        <h3 class="text-center"><?php echo get_field('section_title'); ?></h3>
        <div class="boxes d-flex flex-wrap j-sb pt-2">
            <?php if( have_rows('boxes') ): ?>
            <?php while( have_rows('boxes') ): the_row();?>
            <div class="box w-3">
                <p class="title"><?php echo get_sub_field('title'); ?></p>
                <p class="content"><?php echo get_sub_field('content'); ?></p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="accordion-sec <?php echo $block['className']; ?>">
    <div class="container">
        <h3><?php echo get_field('section_title'); ?></h3>
        <div class="accordion-wrapper pt-2 pb-3" data-controller="accordion">
            <?php if( have_rows('accordion') ): ?>
            <?php while( have_rows('accordion') ): the_row();?>
            <div class="accordion-container">
                <button class="title" data-action="accordion#toggle">
                    <?php echo get_sub_field('title'); ?>
                </button>
                <div class="content">
                    <?php echo get_sub_field('content'); ?>
            </div>
            </div>
            <?php endwhile;?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php 
    $isTabsAvailable = get_field('no_tabs') == 1 ? 'on-desktop on-mobile' : ''; 
?>
<section class="progress-analytics-sec tabs-sec pt-3 pb-4 <?php echo $block['className']; ?>" data-controller="tabs">
    <div class="container">
        <div class="d-flex flex-wrap align-end">
            <div class="w-2">
                <h3><?php echo get_field('section_title'); ?></h3>
                <p class="sub-title">
                    <?php echo get_field('section_subtitle'); ?>
                </p>
            </div>
            <div class="w-2 d-flex j-end">
                <div class="tabs d-flex flex-wrap <?php echo $isTabsAvailable; ?>">
                    <?php $count = 1; ?>
                    <?php if( have_rows('tabs') ): ?>
                    <?php while( have_rows('tabs') ): the_row();?>
                    <button class="tab" data-action="tabs#open" id="tab-<?php echo $count; ?>">
                        <?php echo get_sub_field('tab_name'); ?>
                    </button>
                    <?php $count++; ?>
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs-wrapper mt-2">
        <?php $count = 1; ?>
        <?php if( have_rows('tabs') ): ?>
        <?php while( have_rows('tabs') ): the_row();?>
        <div class="tabs-container" data-id="tab-<?php echo $count; ?>">
            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
        </div>
        <?php $count++; ?>
        <?php endwhile;?>
        <?php endif; ?>
    </div>
</section>
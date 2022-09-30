<section class="progress-analytics-sec pt-3 pb-3" data-controller="tabs">
    <div class="container">
        <div class="d-flex flex-wrap align-end">
            <div class="w-2">
                <h4><?php echo get_field('section_title'); ?></h4>
                <p class="sub-title">
                    <?php echo get_field('section_subtitle'); ?>
                </p>
            </div>
            <div class="w-2 d-flex j-end">
                <div class="tabs d-flex flex-wrap">
                    <!-- print tabs for loop -->
                    <?php $count = 1; ?>
                    <?php if( have_rows('tabs') ): ?>
                    <?php while( have_rows('tabs') ): the_row();?>    
                    <button class="tab" data-action="tabs#open" id="tab-<?php echo $count; ?>">
                        <i class="fa-regular fa-heart"></i><?php echo get_sub_field('tab_name'); ?>
                    </button>  
                    <?php $count++; ?>  
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>
            </div>            
        </div>
        <div class="tabs-wrapper pt-2">
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
    </div>
</section>
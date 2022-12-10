 <!-- GDPR Section -->
 <section class="gdpr-sec pt-3 pb-3 <?php echo $block['className']; ?>">
    <div class="container">
        <div class="d-flex flex-wrap align-center">
            <div class="content w-13 pr-4">
                <h4><?php echo get_field('gdpr_title', 'option'); ?></h4>
                <p><?php echo get_field('gdpr_content', 'option'); ?></p>
            </div>
            <div class="w-3 d-flex j-end">
                <img class="logo" src="<?php echo get_field('gdpr_image', 'option')['url']; ?>" alt="<?php echo get_field('gdpr_image', 'option')['alt']; ?>">
            </div>
        </div>
    </div>
</section>
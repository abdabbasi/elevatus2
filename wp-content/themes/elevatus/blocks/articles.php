<?php $articles_count = count((get_field('article'))); ?>

<section class="articles-sec pt-3 pb-3 <?php echo $block['className']; ?>">
    <div class="container">
        <div class="articles-container d-flex mb-2">
            <?php if( have_rows('article') ): ?>
            <?php while( have_rows('article') ): the_row();?>

            <?php $have_link = get_sub_field('have_link') ; ?>
            <div class="article w-<?php echo $articles_count ?>">
                <div class="image">
                    <img src="<?php echo get_sub_field('image')['url']; ?>"
                        alt="<?php echo get_sub_field('image')['alt']; ?>">
                </div>
                <div>
                    <h4 class="sub-heading"><?php echo get_sub_field('title'); ?></h4>
                    <p class="sub-title"><?php echo get_sub_field('subtitle'); ?></p>

                    <?php if($have_link): ?>
                    <a class="btn-link"
                        href="<?php echo get_sub_field('link_name')['url']; ?>"><?php echo get_sub_field('link_name')['title']; ?></a>
                    <?php endif; ?>
                </div>

            </div>
            <?php endwhile;?>
            <?php endif; ?>
        </div>
    </div>
</section>
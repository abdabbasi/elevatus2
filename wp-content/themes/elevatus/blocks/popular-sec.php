<section class="popular-sec <?php echo $block['className']; ?>">
    <div class="container">
        <div>
            <div class="w-2">

                <div class="image">
                    <img src="<?php  echo get_field('main_blog_image')['url'];  ?>"
                        alt="<?php  echo get_field('main_blog_image')['alt'];  ?>">
                </div>
                <div>
                    <h6><?php  echo get_field('video_description');  ?></h6>
                    <h2><?php  echo get_field('main_blog_title');  ?></h2>
                    <p><?php  echo get_field('main_blog_subtitle');  ?></p>
                    <a href="">
                        <img src="<?php  echo get_field('blog_link_image');  ?>"
                            alt="<?php  echo get_field('blog_link_image');  ?>">
                    </a>
                </div>

            </div>

            <div class="w-2">
                <?php if( have_rows('popular_blogs') ): ?>
                <?php while( have_rows('popular_blogs') ): the_row();?>
                <div>
                    <div class="image">
                        <img src="<?php echo get_sub_field('title'); ?>" alt="">
                    </div>

                    <div>
                        <h6></h6>
                        <h3></h3>
                        <p></p>
                        <p></p>
                    </div>

                </div>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
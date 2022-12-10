<section class="blog-hero <?php echo $block['className']; ?>">
    <div class="container">
        <div class="d-flex d-wrap">
            <div class="w-2 d-flex fd-col j-center pl-3">
                <h1> <?php  echo get_field('title');  ?></h1>
                <p class="sub-heading"><?php  echo get_field('subtitle');  ?></p>
            </div>
            <div class="w-2 image">
                <img src="<?php  echo get_field('image');  ?>" alt="<?php  echo get_field('image');  ?>">
            </div>
        </div>
    </div>
</section>
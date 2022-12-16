<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elevatus_2022
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="masthead" class="site-header" data-controller="mainMenu">
            <div class="container d-flex j-sb align-center">
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation">
                    <?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
                </nav><!-- #site-navigation -->

                <div class="menu-open-btn fd-col j-sa" data-action="click->mainMenu#toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="container p-rel">
                <div class="mega-menu">
                    <div class="menu-wrapper d-flex flex-wrap">
                        <div class="w-4 video-sec">
                            <p class="menu-title"><?php echo get_field('mega_menu_title', 'option'); ?></p>
                            <div class="menu-video">
                                <video controls poster="<?php echo get_field('menu_video_poster', 'option'); ?>">
                                    <source src="<?php echo get_field('menu_video', 'option'); ?>" type="video/mp4">
                                    <source src="<?php echo get_field('menu_video', 'option'); ?>" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <div class="w-4 menu-list products-menu">
                            <?php if( have_rows('products_menu', 'option') ): ?>
                            <?php while( have_rows('products_menu', 'option') ): the_row();?>
                            <a href="<?php echo get_sub_field('url', 'option')['url']; ?>" class="item"
                                target="<?php echo get_sub_field('url', 'option')['target']; ?>">
                                <div class="d-flex">
                                    <div class="image">
                                        <?php if (get_sub_field('icon', 'option')) : ?>
                                        <img src="<?php echo get_sub_field('icon', 'option'); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="pl-1 w-1">
                                        <p class="title"><?php echo get_sub_field('title', 'option'); ?></p>
                                        <p class="content"><?php echo get_sub_field('content', 'option'); ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php endwhile;?>
                            <?php endif; ?>
                        </div>
                        <div class="w-4 menu-list">
                            <?php if( have_rows('middel_menu', 'option') ): ?>
                            <?php while( have_rows('middel_menu', 'option') ): the_row();?>
                            <a href="<?php echo get_sub_field('url', 'option')['url']; ?>" class="item"
                                target="<?php echo get_sub_field('url', 'option')['target']; ?>">
                                <div class="d-flex">
                                    <div class="image">
                                        <?php if (get_sub_field('icon', 'option')) : ?>
                                        <img src="<?php echo get_sub_field('icon', 'option'); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="pl-1 w-1">
                                        <p class="title"><?php echo get_sub_field('title', 'option'); ?></p>
                                        <p class="content"><?php echo get_sub_field('content', 'option'); ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php endwhile;?>
                            <?php endif; ?>
                        </div>
                        <div class="w-4 menu-list">
                            <?php if( have_rows('industries_menu', 'option') ): ?>
                            <?php while( have_rows('industries_menu', 'option') ): the_row();?>
                            <a href="<?php echo get_sub_field('url', 'option')['url']; ?>" class="item"
                                target="<?php echo get_sub_field('url', 'option')['target']; ?>">
                                <div class="d-flex">
                                    <div class="image">
                                        <?php if (get_sub_field('icon', 'option')) : ?>
                                        <img src="<?php echo get_sub_field('icon', 'option'); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="pl-1 w-1">
                                        <p class="title"><?php echo get_sub_field('title', 'option'); ?></p>
                                        <p class="content"><?php echo get_sub_field('content', 'option'); ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php endwhile;?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->
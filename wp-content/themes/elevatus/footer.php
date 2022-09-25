<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elevatus_2022
 */

?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="d-flex flex-wrap">
            <div class="w-5">
                <div class="site-branding">
                    <?php the_custom_logo(); ?>
                </div><!-- .site-branding -->
				<p class="small-text light mt-2">©2022 Elevatus, Inc.</p>
            </div>
            <div class="w-5">
                <p class="menu-title">About</p>
                <?php
					wp_nav_menu(
						array(
							'theme_location' => 'about-menu',
							'menu_id'        => 'about-menu',
						)
					);
				?>
            </div>
            <div class="w-5">
                <p class="menu-title">Solutions</p>
                <?php
					wp_nav_menu(
						array(
							'theme_location' => 'solutions-menu',
							'menu_id'        => 'solutions-menu',
						)
					);
				?>
            </div>
            <div class="w-5">
                <p class="menu-title">Resources</p>
                <?php
					wp_nav_menu(
						array(
							'theme_location' => 'resources-menu',
							'menu_id'        => 'resources-menu',
						)
					);
				?>
            </div>
            <div class="w-5">
                <p class="menu-title">Follow Us</p>
                <?php
					wp_nav_menu(
						array(
							'theme_location' => 'sm-menu',
							'menu_id'        => 'sm-menu',
						)
					);
				?>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
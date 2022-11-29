<?php
/**
 * Main header
 *
 * @package Blog_Up
 */

?>
<header id="masthead" class="site-header">
    <div class="container">
        <div class="site-branding">
            <div class="site-branding-inner">
                <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo">
                    <?php the_custom_logo(); ?>
                </div>
                <?php endif; ?>

                <div class="site-title-tagline">
                    <?php
					$hide_site_title = blog_up_get_option( 'hide_site_title' );

					if ( false === $hide_site_title ) {
						if ( is_front_page() && is_home() ) :
							?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
						endif;
					}

					$hide_tagline = blog_up_get_option( 'hide_tagline' );

					if ( false === $hide_tagline ) {
						$blog_up_description = get_bloginfo( 'description', 'display' );
						if ( $blog_up_description || is_customize_preview() ) :
							?>
                    <p class="site-description">
                        <?php echo $blog_up_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </p>
                    <?php
						endif;
					}
					?>
                </div><!-- .site-title-tagline -->
            </div><!-- .site-branding-inner -->
        </div><!-- .site-branding -->

        <div class="main-navigation-wrap">
            <div class="main-navigation-inner">
                <div class="main-navigation-left">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span
                            class="menu-bar"></span><span class="menu-bar"></span><span
                            class="menu-bar"></span></button>
                    <nav id="site-navigation" class="main-navigation">
                        <?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'fallback_cb'    => 'blog_up_menu_fallback',
								'container_class' => 'main-nav',
							)
						);
						?>
                    </nav><!-- #site-navigation -->
                </div><!-- .main-navigation-left -->
                <div class="search-wrap">
                    <a href="javascript:void(0);" class="search-icon">
                        <?php echo blog_up_get_theme_svg('search'); ?>
                        <?php echo blog_up_get_theme_svg('cross'); ?>
                    </a>
                </div>
            </div><!-- .main-navigation-inner -->

            <div class="search-form-wrap">
                <?php get_search_form(); ?>
            </div>
        </div><!-- .main-navigation-wrap -->
    </div><!-- .container -->
</header><!-- #masthead -->
<?php
/**
 * Template part for displaying hero content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_Up
 */

$banner_image = blog_up_get_option( 'banner_image' );
$banner_heading = blog_up_get_option( 'banner_heading' );
$banner_button = blog_up_get_option( 'banner_button' );
$banner_link = blog_up_get_option( 'banner_link' );

if( !empty( $banner_link ) ) {
	$button_link = esc_url( $banner_link );
} else{
	$button_link = '#';
}

?>

<div id="hero" class="site-hero" style="background-image: url( <?php echo esc_url( $banner_image ); ?> );">
    <?php if ( !empty( $banner_heading ) || !empty( $banner_content ) || !empty( $banner_button ) ): ?>
    <div class="container">
        <div class="hero-content">
            <?php if( !empty( $banner_heading ) ): ?>
            <h2 class="hero-heading"><?php echo esc_html( $banner_heading ); ?></h2>
            <?php endif; ?>

            <?php if( !empty( $banner_button ) ): ?>
            <a href="<?php echo $button_link; ?>" class="button hero-link"><?php echo esc_html( $banner_button ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
</div>
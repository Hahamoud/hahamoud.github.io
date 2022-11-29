<?php
/**
 * Social Share
 *
 * @package Blog_Up
 */

$post_id = get_the_ID();

$social_share_heading = blog_up_get_option( 'social_share_heading' );
?>

<div class="blog-up-social-share">
	<?php if ( ! empty( $social_share_heading ) ) : ?>
		<h2 class="heading"><?php echo esc_html( $social_share_heading ); ?></h2>
	<?php endif; ?>

	<?php echo blog_up_get_social_share( $post_id ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div><!-- .blog-up-social-share -->

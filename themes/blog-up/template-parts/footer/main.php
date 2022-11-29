<?php
/**
 * Main footer
 *
 * @package Blog_Up
 */

?>
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-footer-inner">
            <?php if ( true === apply_filters( 'blog_up_credits_status', true ) ) : ?>
            <div class="site-info">
                <?php do_action( 'blog_up_credits' ); ?>
            </div><!-- .site-info -->
            <?php endif; ?>

        </div><!-- .site-footer-inner -->
    </div><!-- .container -->
</footer><!-- #colophon -->
<?php
/**
 * Template part for displaying results in search pages
 *
 * @package Blog_Up
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-content">

        <?php blog_up_post_thumbnail(); ?>

        <header class="entry-header">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php blog_up_render_meta( blog_up_get_option( 'blog_meta' ) ); ?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
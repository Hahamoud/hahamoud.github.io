<?php
/**
 * The main template file
 *
 * @package Blog_Up
 */

get_header();
?>
<main id="primary" class="site-main">

    <?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) :
				?>
    <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>
    <?php endif; ?>

    <div class="site-posts-wrap">
        
        <article id="post-about-me" class="post-42 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">

        <?php $post = get_post(42);  // Shows the content of the "About" page. ?>
            <div class="post-content">
                
                <?php echo get_the_post_thumbnail($post, 'full'); ?>
                <header class="entry-header">
                    <h2 class="entry-title"><a href="https://www.raphlevy.com/?p=42" rel="bookmark">
                        <?php echo $post->post_title ?></a></h2>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <p><?php echo $post->post_content ?></p>
                </div><!-- .entry-content -->
            </div>
        </article>

        <?php

				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				?>
    </div><!-- .site-posts-wrap -->

    <?php do_action( 'blog_up_pagination' ); ?>

    <?php else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

</main><!-- #main -->
<?php
do_action( 'blog_up_sidebar' );
get_footer();
<?php
/**
 * The template for displaying archive pages
 *
 * @package Blog_Up
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>

    <header class="page-header">
        <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
    </header><!-- .page-header -->

    <div class="site-posts-wrap">
        <?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				?>
    </div><!-- .site-posts-wrap -->

    <?php do_action( 'blog_up_pagination' ); ?>

    <?php
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

</main><!-- #main -->

<?php
do_action( 'blog_up_sidebar' );
get_footer();
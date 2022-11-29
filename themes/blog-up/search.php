<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Blog_Up
 */

get_header();

?>

<main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>

    <header class="page-header">
        <h1 class="page-title">
            <?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'blog-up' ), '<span>' . get_search_query() . '</span>' );
						?>
        </h1>
    </header><!-- .page-header -->

    <div class="site-posts-wrap">

        <?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'search' );
				endwhile; ?>
    </div>

    <?php do_action( 'blog_up_pagination' );

		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

</main><!-- #main -->

<?php
do_action( 'blog_up_sidebar' );
get_footer();
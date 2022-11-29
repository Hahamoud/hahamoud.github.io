<?php
/**
 * Featured posts
 *
 * @package Blog_Up
 */

?>
<?php do_action( 'blog_up_before_featured_posts' ); ?>

<div class="featured-posts">
    <div class="container">
        <div class="swiper featured-posts-slider">
            <div class="swiper-wrapper">
                <?php
			$feat_args = array(
				'posts_per_page'      => 3,
				'ignore_sticky_posts' => true,
				'no_found_rows'       => true,
				'cache_results'       => false,
			);

			$featured_posts_categories = (array) blog_up_get_option( 'featured_posts_categories' );

			if ( ! empty( $featured_posts_categories ) ) {
				$feat_args['category__in'] = (array) $featured_posts_categories;
			}

			$feat_query = new WP_Query( apply_filters( 'blog_up_featured_posts_query_args', $feat_args ) );

			if ( $feat_query->have_posts() ) :
				while ( $feat_query->have_posts() ) :
					$feat_query->the_post();
					?>
                <div class="swiper-slide">
                    <div class="featured-post">
                        <a class="post-thumbnail" href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>

                        </a>

                        <div class="featured-post-content">

                            <?php if ( is_sticky() ) : ?>
                            <div class="featured-post-featured"><?php echo __('Featured', 'blog-up' )?></div>
                            <?php endif; ?>

                            <?php the_title( '<h2 class="featured-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

                            <?php if ( true === apply_filters( 'blog_up_featured_posts_categories_status', true ) || true === apply_filters( 'blog_up_featured_posts_date_status', true ) ) :?>
                            <div class="featured-post-meta">
                                <?php if ( true === apply_filters( 'blog_up_featured_posts_categories_status', true ) )  { blog_up_posted_category(); } ?>
                                <?php if ( true === apply_filters( 'blog_up_featured_posts_date_status', true ) )  { blog_up_posted_on(); } ?>
                            </div>
                            <?php endif; ?>

                            <div class="entry-content featured-post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div><!-- .featured-post-content -->
                    </div><!-- .featured-post -->
                </div>
                <?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
            </div>
        </div>

        <nav class="featured-posts-navigation">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </nav>
    </div>

</div><!-- .featured-posts -->

<?php do_action( 'blog_up_after_featured_posts' ); ?>
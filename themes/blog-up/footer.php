<?php
/**
 * The template for displaying the footer
 *
 * @package Blog_Up
 */

?>
			</div><!-- .inner-wrapper -->
		</div><!-- .container -->
	</div><!-- #content -->

	<?php do_action( 'blog_up_after_content' ); ?>

	<?php do_action( 'blog_up_before_footer' ); ?>

	<?php do_action( 'blog_up_footer' ); ?>

	<?php do_action( 'blog_up_after_footer' ); ?>

</div><!-- #page -->

<?php do_action( 'blog_up_body_bottom' ); ?>

<?php wp_footer(); ?>

</body>
</html>

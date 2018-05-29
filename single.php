<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Humane_Society
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-9">
					<?php
						while ( have_posts() ) :
							the_post();

							$post_type = get_post_type();

							if ($post_type === 'dogs-for-adoption' || $post_type === 'cats-for-adoption') {
								get_template_part( 'template-parts/content', 'adoption' );
							} else {
								get_template_part( 'template-parts/content', $post_type );
							}

							// the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( $post_type === 'product') :
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							endif;

						endwhile; // End of the loop.
					?>
					</div>

					<div class="col-sm-12 col-md-4 col-lg-3">
					<?php get_sidebar(); ?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

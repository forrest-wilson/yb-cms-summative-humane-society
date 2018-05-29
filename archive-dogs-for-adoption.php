<?php
/**
 * Template Name: Dogs for Adoption
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
							$loop = new WP_Query(array("post_type" => "dogs-for-adoption", "order_by" => "post_id", "order" => "ASC"));
							include(locate_template('template-parts/content-adoptions.php'));
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

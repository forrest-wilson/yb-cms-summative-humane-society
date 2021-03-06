<?php
/**
 * Template part for displaying page content in page-adoption.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humane_Society
 */

?>

<div class="row animal">

    <?php if ($loop->have_posts()) : ?>

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>

            <?php
                $name = get_field("name");
                $location = get_field("location");
                $status = get_field("status");
                $age = get_field("age");
                $sex = get_field("sex");
                $breed = get_field("breed");
            ?>

            <div class="col-sm-12 animal-post">
                <div class="animal-thumbnail">
                    <?php if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?>
                    <?php } else { ?>
                        <img src="<?php echo bloginfo("stylesheet_directory") . "/assets/img/no-image.jpg"; ?>" alt="No Image">
                    <?php } ?>
                </div>
                <div class="animal-info">
                    <p><strong>Name: </strong><?php echo $name; ?></p>
                    <p><strong>Location: </strong><?php echo $location; ?></p>
                    <p><strong>Status: </strong><?php echo $status; ?></p>
                    <p><strong>Age: </strong><?php echo $age; ?></p>
                    <p><strong>Sex: </strong><?php echo $sex; ?></p>
                    <p><strong>Breed: </strong><?php echo $breed; ?></p>
                    <a href="<?php echo get_post_permalink($post); ?>" role="button" class="btn btn-primary view-animal-adoption-button">See More</a>
                </div>
            </div>
            <hr>

        <?php endwhile; ?>

        <div class="col-sm-12">
            <?php previous_posts_link( 'Newer' ); ?>
            <?php next_posts_link( 'Older' ); ?>
        </div>

    <?php else : ?>

        <div class="col-sm-12">
            <h1>Nothing found!</h1>
            <p>It looks like there isn't anything to show here!</p>
        </div>

    <?php endif; ?>

    <?php wp_reset_query(); ?>

    <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'humane-society' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</div>
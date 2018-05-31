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
    <?php
        $name = get_field("name");
        $location = get_field("location");
        $status = get_field("status");
        $age = get_field("age");
        $sex = get_field("sex");
        $breed = get_field("breed");
        $desexed = get_field("desexed");
        $donation = get_field("donation");
        $good_with_other_pets = get_field("good_with_other_pets");
        $good_with_kids = get_field("good_with_kids");
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
            <p><strong>Desexed: </strong><?php echo $desexed; ?></p>
            <p><strong>Donation: </strong>$<?php echo $donation; ?></p>
            <p><strong>Good with other pets?: </strong><?php echo $good_with_other_pets; ?></p>
            <p><strong>Good with kids?: </strong><?php echo $good_with_kids; ?></p>
        </div>
    </div>
    <hr>
    <div><?php the_content(); ?></div>
    <hr>
    <div style="width: 100%;">
        <p>Please get in touch <a href="<?php echo get_permalink(24); ?>">here</a> to inquire about adopting <?php echo $name; ?>.</p>
    </div>
    <br>
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
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Humane_Society
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
		the_content();

		if (get_the_title() === 'Donate') :

			if (empty($_POST['donation'])) : ?>

				<i>Required fields marked with *</i>

				<form style="max-width: 500px;" method="POST" action="">
					<div class="form-group">
						<label for="donation_name">Name *</label>
						<input type="text" class="form-control" name="donation_name" required>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col">
								<label for="donation_email">Email *</label>
								<input type="email" class="form-control" name="donation_email" required>
							</div>
							<div class="col">
								<label for="donation_phone">Phone Number</label>
								<input type="number" class="form-control" name="donation_phone">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="donation_amount">Amount to Donate *</label>
						<input type="number" class="form-control" name="donation_amount" required>
					</div>
					<div class="form-group">
						<label for="cardNumber">Card Number *</label>
						<input type="number" class="form-control" name="cardNumber" required>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col">
								<label for="cvv">CVV *</label>
								<input type="text" class="form-control" name="cvv" required>
							</div>
							<div class="col">
								<label>Card Expiry *</label>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<select class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<select class="form-control">
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<input type="hidden" name="donation" value="donation_form">
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			<?php else : ?>

				<div class="success-message">
					<p><i class="fa fa-check"></i> <b>Success! Thank you for your generous contribution!</b></p>
				</div>

			<?php endif; ?>

		<?php endif;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'humane-society' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

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
</article><!-- #post-<?php the_ID(); ?> -->

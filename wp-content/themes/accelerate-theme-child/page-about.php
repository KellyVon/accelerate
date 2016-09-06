<?php
/**
 * The template for the about page
 *
 * *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="page-about">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='aboutpage-hero'>
          <p><a href="/accelerate"><font color="#45ac9d">Accelerate</font></a> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. </p>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .page-about -->


	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
				$title_1 = get_field('title_1');
				$content_1 = get_field('content_1');
				$image_1 = get_field('image_1');
				$title_2 = get_field('title_2');
				$content_2 = get_field('content_2');
				$image_2 = get_field('image_2');
				$title_3 = get_field('title_3');
				$content_3 = get_field('content_3');
				$image_3 = get_field('image_3');
				$title_4 = get_field('title_4');
				$content_4 = get_field('content_4');
				$image_4 = get_field('image_4');
				$size = "full";  ?>

				<div class="our-services">
						<h4>Our Services</h4>
						<p class="top">We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
				</div>

				<section class="first">
						<?php if($image_1) { ?>
								<figure class="bullseye"><?php echo wp_get_attachment_image( $image_1, $size ); ?></figure>
								<?php } ?>
					<aside class="content-first">
									<h2><?php echo $title_1; ?></h2>
									<p><?php echo $content_1; ?></p>
					</aside>
					<div style="clear: both;" </div>
				</section>

				<section class="second">
					<?php if($image_2) { ?>
						<figure class="atom"><?php echo wp_get_attachment_image( $image_2, $size ); ?></figure>
						<?php } ?>
						<aside class="content-second">
								<h2><?php echo $title_2; ?></h2>
								<p><?php echo $content_2; ?></p>
						</aside>
						<div style="clear: both;" </div>
					</section>

					<section class="third">
						<?php if($image_3) { ?>
							<figure class="like"><?php echo wp_get_attachment_image( $image_3, $size ); ?></figure>
							<?php } ?>
							<aside class="content-third">
									<h2><?php echo $title_3; ?></h2>
									<p><?php echo $content_3; ?></p>
							</aside>
							<div style="clear: both;" </div>
					</section>

					<section class="fourth">
						<figure class="wand"><img src="http://localhost:8888/accelerate/wp-content/uploads/2016/08/magicwand.png" height="216" width="216"></figure>

							<aside class="content-fourth">
									<h2><?php echo $title_4; ?></h2>
									<p><?php echo $content_4; ?></p>
							</aside>
							<div style="clear: both;" </div>

					</section>


					<section class="fifth">
						<aside class="content-fifth">
								<h2>Interested in working with us?</h2>
						</aside>
						<section class="contact-us">
								<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
						</section>
					</section>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>

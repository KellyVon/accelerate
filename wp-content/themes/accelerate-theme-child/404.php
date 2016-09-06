<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
			<div class="marge">
				<iframe src="//giphy.com/embed/3o6MbdcSP65sUIR1e0" width="480" height="366" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
			</div>

			<div class="whoops">
				<h2>Whoops, Took a Wrong Turn...</h2>
				<p>Sorry, this page no longer exists, never existed or has been moved.  We feel like complete jerks for totally misleading you.</p>
				<br>
				<p>Feel free to take a look around our <a href="/blog"><strong><font color="#45ac9d">blog</font></strong></a> or some of our <a href="/case-studies"><strong><font color="#45ac9d">featured work.</font></strong></a></p>
			</div>


		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>

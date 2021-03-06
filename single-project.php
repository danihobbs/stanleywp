<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package StanleyWP
 */

get_header(); ?>

			<div id="primary" class="content-area-si">
				<main id="main" class="site-main" role="main">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'project' );

					 ?>

				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<?php
								if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;?>
						</div>
					</div>
				</div>

			<?php

					// If comments are open or we have at least one comment, load up the comment template.


				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_footer();

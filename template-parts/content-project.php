<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StanleyWP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">

			<header class="entry-header">
				<?php	
					the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content text-center">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'stanelywp' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stanelywp' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
				</div>
	</div><!-- .row -->
	<div class="row justify-content-center text-center">
			<div class="col-md-8">
			<?php	// Get the list of files
				$files = get_post_meta( get_the_ID(), '_stanleywp_images', 1 );

				echo '<div class="file-list-wrap row">';
				// Loop through them and output an image
				foreach ( (array) $files as $attachment_id => $attachment_url ) {
					echo '<div class="file-list-image col-md-12 mb-2">';
					echo wp_get_attachment_image( $attachment_id, 'full' );
					echo '</div>';
				}
				echo '</div>';
			?>

			<footer class="entry-footer">
				<?php stanelywp_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			<?php echo get_the_term_list(get_the_ID(), 'project_category', 'type: ', ', ', '');?>
		</div><!-- .container -->
	</div>
</div>
</article><!-- #post-## -->

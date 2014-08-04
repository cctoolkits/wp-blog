<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package CCToolkits
 */
?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'cctoolkits' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


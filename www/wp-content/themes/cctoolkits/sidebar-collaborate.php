<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package CCToolkits
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>


		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->

<?php
/**
 * @package CCToolkits
 // Aca se tienen que cargar los 6 toolkits (que son children de "toolkits")
 // Para localizar con gettext usamos __( 'Texto a traducir', 'cctoolkits' );
 */
?>

<section id="toolkitwrapper" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	
	<?php
		// Determine parent page ID
		//$parent_page_id = ( '0' != $post->post_parent ? $post->post_parent : $post->ID );
		$parent_page_id = 256;
		// Build WP_Query() argument array
		$page_tree_query_args = array('post_parent' => $parent_page_id, 'post_type' => 'page');
		// Get child pages as a WP_Query() object
		$page_tree_query = new WP_Query( $page_tree_query_args );
		while ( $page_tree_query->have_posts() ) : $page_tree_query->the_post(); ?>
			<div class="toolkit-item">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( "toolkit-thumb"); ?></a>
			<?php the_excerpt(); ?>
			</div>
		<?php endwhile;	?>
	
		<?php edit_post_link( __( 'Edit', 'cctoolkits' ), '<span class="edit-link">', '</span>' ); ?>

</section><!-- #post-## -->

<section id="professionselect"> 
	<div><strong><?php echo __( "Can't find the right toolkit for you?", 'cctoolkits' ); ?></strong>
	<br /><?php echo __( "Let us help.", 'cctoolkits' ); ?></div>

	<form action="" method="GET">

		<select id="tag" name="tag">
			
		<?php
		$tags = get_tags();
		$html = "";
		foreach ( $tags as $tag ) {
			$html .= "<option value='{$tag->slug}'>{$tag->name}</option>";
		}
		echo $html;
		?>
		</select>
		<input type="submit" value="Go!" >
	</form>
</section>

<section id="aroundtheworld"> 
	<div><strong><?php echo __( "Creative Commons work is shared around the world.", 'cctoolkits' ); ?></strong>
	<br /><?php echo __( "Share your own project and place it in our Creative Commons Toolkit map.", 'cctoolkits' ); ?></div>
	
	<?php 		
		
		
		$page = get_page_by_path("maps");
		$mapsId = $page->ID;
	
		$permalink = get_permalink($mapsId);
		
	?>
	
	<a href="<?php echo $permalink ?>" class="button"><?php echo __( "View Map", 'cctoolkits' ); ?></a>
	<a href="<?php echo $permalink ?>" class="button"><?php echo __( "Share Yours", 'cctoolkits' ); ?></a>
	
</section>

<section id="faq-home"> 

		<?php 		

		$faq = new WP_Query('pagename=faq-home');
		
		while ( $faq->have_posts() ) : $faq->the_post();
			echo the_content();
		endwhile; // end of the loop. ?>


</section>


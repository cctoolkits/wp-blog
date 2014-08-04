<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CCToolkits
 */

get_header(); ?>

  <div class="submenu">
    <div id="content">    
      <ul>
        <li class="Basics"><a href="<?php echo home_url( '/' ); ?>basics-of-cc">Basics</a></li>
        <li class="Education"><a href="<?php echo home_url( '/' ); ?>education">Education</a></li>
        <li class="Goverment"><a href="<?php echo home_url( '/' ); ?>government-and-data">Goverment</a></li>
        <li class="Creative"><a href="<?php echo home_url( '/' ); ?>creative-industries">Creative Industries</a></li>
        <li class="Science"><a href="<?php echo home_url( '/' ); ?>science-and-data">Science</a></li>
        <li class="Culture"><a href="<?php echo home_url( '/' ); ?>culture">Culture</a></li>
      </ul>
    </div>   
  </div>

  <div class="heading">
    <div id="content" class="container_12">
        
        <div class="grid_12">
          <h1><?php _e( 'Nothing Found', 'cctoolkits' ); ?></h1>
        </div>

    </div>
  </div>

  <div id="primary">
      <div class="container_12">
          <div class="grid_12">
				<div class="inner-pages">

            <div class="page-content">
              <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'cctoolkits' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

              <?php elseif ( is_search() ) : ?>

                <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cctoolkits' ); ?></p>
                <?php get_search_form(); ?>

              <?php else : ?>

                <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'cctoolkits' ); ?></p>
                <?php get_search_form(); ?>

              <?php endif; ?>
            </div><!-- .page-content -->

				</div>
          </div> 


      </div>      
  </div>

<?php get_footer(); ?>

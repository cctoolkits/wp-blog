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
        <li class="Goverment"><a href="<?php echo home_url( '/' ); ?>government-and-data">Government</a></li>
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

            <section class="error-404 not-found">
              <header class="page-header">
                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'cctoolkits' ); ?></h1>
              </header><!-- .page-header -->

              <div class="page-content">
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cctoolkits' ); ?></p>

                <?php get_search_form(); ?>

                <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

                <?php if ( cctoolkits_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
                <div class="widget widget_categories">
                  <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'cctoolkits' ); ?></h2>
                  <ul>
                  <?php
                    wp_list_categories( array(
                      'orderby'    => 'count',
                      'order'      => 'DESC',
                      'show_count' => 1,
                      'title_li'   => '',
                      'number'     => 10,
                    ) );
                  ?>
                  </ul>
                </div><!-- .widget -->
                <?php endif; ?>

                <?php
                /* translators: %1$s: smiley */
                $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'cctoolkits' ), convert_smilies( ':)' ) ) . '</p>';
                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                ?>

                <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

              </div><!-- .page-content -->
            </section><!-- .error-404 -->

				</div>
          </div> 


      </div>      
  </div>

<?php get_footer(); ?>

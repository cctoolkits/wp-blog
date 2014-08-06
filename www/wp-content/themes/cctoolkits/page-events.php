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

/*
Template Name: Events
*/


get_header(); ?>

  <div class="submenu">
    <div id="content">    
      <ul>
        <li class="Basics"><a href="<?php echo home_url( '/' ); ?>basics-of-cc">Basics</a></li>
        <li class="Education"><a href="#">Education</a></li>
        <li class="Goverment"><a href="#">Government</a></li>
        <li class="Creative"><a href="#">Creative Industries</a></li>
        <li class="Science"><a href="#">Science</a></li>
        <li class="Culture"><a href="#">Culture</a></li>
      </ul>
    </div>   
  </div>

  <div class="heading">
    <div id="content" class="container_12">
        
        <div class="grid_7">
          <h1><?php the_title(); ?></h1>
        </div>

    </div>
  </div>

  <div id="primary">
      <div class="container_12">
          <div class="grid_5">
      			<?php while ( have_posts() ) : the_post(); ?>
      				<?php get_template_part( 'content', 'page' ); ?>
      			<?php endwhile; // end of the loop. ?>
          </div>  

          <div class="grid_5 push_2">
            <a class="twitter-timeline" href="https://twitter.com/hashtag/cctoolkits" data-dnt="true" data-widget-id="489089238999109632">#cctoolkits Tweets</a>
            <script>
              // <![CDATA[
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
              // ]]>
            </script>
          </div>
          <div class="grid_5 push_2">
            <strong><a href="https://www.flickr.com/search?sort=relevance&amp;text=%23cctoolkits">#cctoolkits</a> on Flickr</strong>
            <a href="https://www.flickr.com/search?sort=relevance&amp;text=%23cctoolkits">
              <img class="alignnone size-full wp-image-588" src="http://cctoolkits.com/wp-content/uploads/2013/08/Screenshot-2014-07-14-19.23.58.png" alt="cctoolkits images on flickr" width="450" height="300" />
            </a>
          </div>

          <div>

            <?php 
              $events = new WP_Query( array( 'post_type' => 'event',  'orderby' => 'date', 'order' => ASC ) );

              // The Loop
              if ( $events->have_posts() ) {
                echo '<ul class="events-list">';
                while ( $events->have_posts() ):
                  $events->the_post();
                  $custom = get_post_custom( get_the_ID() );
                  $custom_img = wp_get_attachment_image_src($custom['cc_affiliate_image'][0], 'full');
                ?>
                <?php $gridClass = ( $events->current_post == 0 ) ? 'grid_8' : 'grid_4'; ?>
                  <li class="<?php echo $gridClass; ?>">
                    <h4>
                      <time><?php echo date('Y , m' , strtotime($custom['date'][0])); ?></time>
                      <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                    </h4>
                    
                    <h6>
                      <figure>
                        <a href="<?php echo $custom['web_site'][0]; ?>"><img src="<?php echo $custom_img[0] ?>" alt=""></a>
                      </figure>
                      CC Affiliate: 
                      <strong><?php echo $custom['cc_affiliate'][0]; ?></strong><br>
                      Location: 
                      <strong><?php echo $custom['location'][0]; ?></strong><br>
                      Lead organizers:
                      <strong><?php echo $custom['lead_organizers'][0]; ?></strong>
                    <h6>
                    
                    <?php //the_excerpt(); ?>
                  
                  </li>
                
                <?php
                  endwhile;
                  echo '</ul>';
              } else {
                // no posts found
              }
            ?>

          </div>


      </div>      
  </div>

<?php get_footer(); ?>

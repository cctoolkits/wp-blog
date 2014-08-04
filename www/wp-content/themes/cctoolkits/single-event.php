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
        
        <div class="grid_12">
          <h1><?php the_title(); ?></h1>
        </div>

    </div>
  </div>

  <div id="primary" class="single-event">
      <div class="container_12">
          <div class="grid_6 suffix_1">

			<?php while ( have_posts() ) : the_post(); 
            $custom = get_post_custom( get_the_ID() );
            $custom_img = wp_get_attachment_image_src($custom['cc_affiliate_image'][0]);
				?>

        <div class="entry-content">
          
          <time><?php echo date('Y , m' , strtotime($custom['date'][0])); ?></time>
          <hr>
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
          
          <?php echo the_content(); ?>

        </div><!-- .entry-content -->


			<?php endwhile; // end of the loop. ?>
          </div>  

          <div class="grid_5">
            
            <?php 
              $events = new WP_Query( array( 'post_type' => 'event',  'orderby' => 'date', 'order' => ASC ) );

              // The Loop
              if ( $events->have_posts() ) {
                echo '<ul class="events-list">';
                while ( $events->have_posts() ):
                  $events->the_post();
                  $custom = get_post_custom( get_the_ID() );
                  $custom_img = wp_get_attachment_image_src($custom['cc_affiliate_image'][0], 'thumbnail');
                ?>
                
                  <li>
                    <h3>
                      <time><?php echo date('Y , m' , strtotime($custom['date'][0])); ?></time>
                      <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                    </h3>
                    
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
                    
                    <?php //echo the_excerpt(); ?>
                  
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

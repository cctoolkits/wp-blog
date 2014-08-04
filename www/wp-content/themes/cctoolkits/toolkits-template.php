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
Template Name: Template Toolkit
*/


get_header(); ?>

  <div class="submenu">
    <div id="content">    
      <ul>
        <li class="Basics"><a href="<?php echo home_url( '/' ); ?>toolkits/basics-of-cc/">Basics</a></li>
        <li class="Education"><a href="<?php echo home_url( '/' ); ?>#">Education</a></li>
        <li class="Goverment"><a href="<?php echo home_url( '/' ); ?>#">Government</a></li>
        <li class="Creative"><a href="<?php echo home_url( '/' ); ?>#">Creative Industries</a></li>
        <li class="Science"><a href="<?php echo home_url( '/' ); ?>#">Science</a></li>
        <li class="Culture"><a href="<?php echo home_url( '/' ); ?>#">Culture</a></li>
      </ul>
    </div>   
  </div>

  <div class="heading <?php the_field('wich_toolkit'); ?>">
    <div id="content" class="container_12">
        
        <div class="grid_7">
          <h1><?php the_title(); ?></h1>
          <span><?php the_field('toolkit_brief'); ?></span>
        </div>
        
        <div class="grid_5 big-icon">          
        </div>

    </div>
  </div>

  <div id="primary">
      <div class="container_12">
          <div class="grid_7 suffix_1">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
          </div>  

          <div class="grid_4">

              <div class="video_container first-video">
              <h3><?php the_field('title_videos'); ?></h3>
                  <?php the_field('video1'); ?>
                  <?php the_field('video1_description'); ?>
              </div>                                      

              <div class="video_container">
                  <?php the_field('video2'); ?>
                  <?php the_field('video2_description'); ?>                  
              </div>

              <h3><?php the_field('title_slide_deck'); ?></h3>

              <div class="sd">
                  <?php the_field('first_slide_deck'); ?>
                  <?php the_field('credit_slidedeck_1'); ?>           
              </div>

              <div class="sd">
                  <?php the_field('second_slide_deck'); ?>
                  <?php the_field('credit_slidedeck_2'); ?>           
              </div>

              <div class="sd">
                  <?php the_field('third_slide_deck'); ?>
                  <?php the_field('credit_slidedeck_3'); ?>           
              </div>                            



             <div class="download-contain">
                <a href="<?php the_field('download_url'); ?>" class="btn download"><?php the_field('text_button'); ?></a>
                <?php the_field('download_items'); ?>
              </div>  



                           

          </div> <!-- end of grid_4 -->


      </div>      
  </div>

<?php get_footer(); ?>

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
        <li class="Basics"><a href="<?php echo home_url( '/' ); ?>/toolkits/basics-of-cc">Basics</a></li>
        <li class="Education"><a href="<?php echo home_url( '/' ); ?>#">Education</a></li>
        <li class="Government"><a href="<?php echo home_url( '/' ); ?>#">Government</a></li>
        <li class="Creative"><a href="<?php echo home_url( '/' ); ?>#">Creative Industries</a></li>
        <li class="Science"><a href="<?php echo home_url( '/' ); ?>#">Science</a></li>
        <li class="Culture"><a href="<?php echo home_url( '/' ); ?>#">Culture</a></li>
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
          <div class="grid_7 suffix_1">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
          </div>  

          <div class="grid_4">
            
            <span class="hide"><?php get_sidebar('collaborate'); ?></span>                             

          </div>


      </div>      
  </div>

<?php get_footer(); ?>

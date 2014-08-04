<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CCToolkits
 */
?>

  <div id="footer">
    <div id="footerContent" class="container_12">
      <div class="grid_12"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/cctoolkits-01.png"/> </div>

        <div class="grid_2"> <strong>Toolkits</strong>
          <ul>
<?php
/** begin functional footer menu:
*	    <li><a href="<?php echo home_url( '/' ); ?>basics-of-cc">Basics of CC</a></li>
*            <li><a href="<?php echo home_url( '/' ); ?>education">Education</a></li>
*            <li><a href="<?php echo home_url( '/' ); ?>government-and-data">Government</a></li>
*            <li><a href="<?php echo home_url( '/' ); ?>creative-industries">Creative Industries</a></li>
*            <li><a href="<?php echo home_url( '/' ); ?>science-and-data">Science</a></li>
*            <li><a href="<?php echo home_url( '/' ); ?>culture">Culture</a></li>
* end functional footer menu
*/
?> 
	    <li><a href="<?php echo home_url( '/' ); ?>basics-of-cc">Basics of CC</a></li>
            <li>Education</li>
            <li>Government</li>
            <li>Creative Industries</li>
            <li>Science</li>
            <li>Culture</li>
          </ul>
        </div>
        <div class="grid_2"> <strong>Info</strong>
          <ul>
            <li><a href="http://cctoolkits.com/about/">About</a></li>
            <li><a href="http://cctoolkits.com/objective/">Objective</a></li>
	    <li><a href="http://wiki.creativecommons.org/Toolkits">Wiki</a></li>
          </ul>
        </div>
        <div class="grid_2"> <strong>Resources</strong>
          <ul>
            <li><a href="http://cctoolkits.com/download/">Download</a></li>
            <li><a href="http://cctoolkits.com/projects-map/">Project Map</a></li>
	    <li><a href="http://wiki.creativecommons.org/Documentation">Documentation</a></li>
          </ul>
        </div>

        <div class="grid_2"> <strong>Contact</strong>
          <ul>
            <li><a href="/about">Team</li></a>
          </ul>
        </div>

        <div class="grid_4">
            <div class="licence"> 
                <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />Except where otherwise noted, this site is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
            </div>
        </div>

        
      </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
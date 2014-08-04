<?php
/**
 * The Template for displaying all single posts.
 *
 * @package CCToolkits
 */

get_header(); ?>

  <div id="primary">
    <div id="content" class="container_12">
      <div class="mainText container_12">
        <p><strong>How would you tell someone about Creative Commons?</strong></p>
        <p>Here are some toolkits to help start the conversation.</p>
      </div>
      <div class="toolkit-home-item grid_4"> 
      	<a href="<?php echo home_url( '/' ); ?>/basics-of-cc"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/toolkit-icon-color-01.png"/></a>
        <h2>Basics of CC</h2>
        <p>What is CC and what are the CC licenses? Get basic info to share the importance of CC with others. </p>
      </div>
      <div class="toolkit-home-item grid_4">
      	<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/toolkit-icon-color-02.png"/></a>
        <h2>Education</h2>
        <p>Why does CC matter in education? See how CC helps expand access and improve the quality of education around the world.</p>
      </div>
      <div class="toolkit-home-item grid_4">
      	<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/toolkit-icon-color-03.png"/></a>
        <h2>Government</h2>
        <p>Why does CC matter in government? See how CC helps improve transparency, efficiency, and innovation through open policy.</p>
      </div>
      <div class="toolkit-home-item grid_4">
      	<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/toolkit-icon-color-04.png"/></a>
        <h2>Creative Industries</h2>
        <p>Why does CC matter in creative industries? See how CC enhances creative collaboration.</p>
      </div>
      <div class="toolkit-home-item grid_4">
      	<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/toolkit-icon-color-05.png"/></a>
        <h2>Science</h2>
        <p>Why does CC matter in science? See how CC licenses go beyond access and help us advance our understanding of the world.</p>
      </div>
      <div class="toolkit-home-item grid_4">
      	<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/toolkit-icon-color-06.png"/></a>
        <h2>Culture</h2>
        <p>Why does CC matter in the GLAM sector? See how CC helps us preserve, build upon, and share the world’s cultural heritage.</p>
      </div>
    </div>
    <div id="selectWrap" class="container_12">
          <div class="select-text "><p><strong>Can’t find the right toolkit for you?</strong></p>
		<p>Let us help.</p></div>
      <div class="selectContent ">

        <select class="grid_9">
          <option>Select Something...</option>
        </select>
        <button class="grid_1">Ok</button>
      </div>
    </div>
  </div>
  <div id="home-mapinfo">
    <div id="content">
      <p><strong>People are sharing the importance of Creative Commons all over the world. </strong></p>
     <br>
      <p>Share your own project on the map! <strong>(coming soon)</strong></p>
      <div class="home-maps-botonera">
        <iframe width='100%' height='520' frameborder='0' src='http://ginocingolani.cartodb.com/viz/f8ac60da-d1b8-11e3-8e28-0e73339ffa50/embed_map?title=true&description=true&search=false&shareable=true&cartodb_logo=true&layer_selector=false&legends=true&scrollwheel=true&fullscreen=true&sublayer_options=1&sql=&zoom=2&center_lat=-24.44714958973082&center_lon=-21.09375' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div id="home-faqs">
    <div id="content">
     <h2>Frequently Asked Questions</h2>
      <h4>What is the CC Toolkits project?</h4>
      <p>The CC Toolkits is an initiative of <a href="http://creativecommons.org">Creative Commons (CC)</a> to strengthen the Global Affiliate Network through events centered around the curation of open content to help share the importance of CC. This project is being supported by Creative Commons Headquarters and coordinated with the help of volunteers around the world.</p>
      <h4>How do I get involved with CC Toolkits?</h4>
      <p>Working groups are getting together to build toolkits for each of the topics, and help adding items to our <a href="http://wiki.creativecommons.org/Documentation">documentation page</a> on the wiki.  Check out the <a href=”http://cctoolkits.com/events”>events</a> page for updates on each working group’s progress.</p>
      <h4>Why are you building toolkits?</h4>
      <p>These toolkits will make it easier for people to share the word about CC by putting presentations, talking points, and other helpful media about CC in the hands our affiliates. Items in the toolkit will be free and openly licensed, available to anyone who wants to remix or share them with a friend.</p>
    </div>
  </div>

<?php get_footer(); ?>
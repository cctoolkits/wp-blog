<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CCToolkits
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/styles.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/960_12_col.css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page-content">
  <div id="header" class="container_12">
    <ul class="flags">
      <?php pll_the_languages(array('dropdown'=>1,'show_flags'=>1,'show_names'=>1));?>
    </ul>
    <div id="logo" class="grid_5"> <a href="<?php echo home_url( '/' ); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/toolkits_logo-03_beta.png"/></a> </div>
    <div id="menu" class="grid_7">
      <nav id="site-navigation" class="main-navigation" role="navigation">
        <h1 class="menu-toggle"><?php _e( 'Menu', 'cctoolkits' ); ?></h1>
        <div class="skip-link"><a class="screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cctoolkits' ); ?></a></div>

        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav><!-- #site-navigation -->  

    </div>
  </div>

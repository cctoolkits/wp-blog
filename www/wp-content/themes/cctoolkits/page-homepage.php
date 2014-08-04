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
Template Name: Homepage template
*/



get_header(); ?>

<?php $current_lang = get_bloginfo('language'); ?>

<?php get_template_part( 'content', 'home-'.$current_lang ); ?>

<?php get_footer(); ?>
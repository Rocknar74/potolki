<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kontor
 */

/**
 *
 * @hooked kontor_footer_start
 */
do_action( 'kontor_action_before_footer' );

/**
 * Hooked - kontor_footer_top_section -10
 * Hooked - kontor_footer_section -20
 */
do_action( 'kontor_action_footer' );

/**
 * Hooked - kontor_footer_end. 
 */
do_action( 'kontor_action_after_footer' );

wp_footer(); ?>

</body>  
</html>
<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package Kontor
 */

if ( ! function_exists( 'kontor_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
function kontor_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
}
endif;

add_action( 'kontor_action_doctype', 'kontor_doctype', 10 );


if ( ! function_exists( 'kontor_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
function kontor_head() {
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php
}
endif;
add_action( 'kontor_action_head', 'kontor_head', 10 );

if ( ! function_exists( 'kontor_page_start' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function kontor_page_start() {
	?><div id="page" class="site"><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kontor' ); ?></a><?php
	}
endif;

add_action( 'kontor_action_before', 'kontor_page_start', 10 );

if ( ! function_exists( 'kontor_header_start' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function kontor_header_start() { ?>
		<header id="masthead" class="site-header" role="banner"><?php
	}
endif;
add_action( 'kontor_action_before_header', 'kontor_header_start' );

if ( ! function_exists( 'kontor_header_end' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function kontor_header_end() {

		?>
			
		</header> <!-- header ends here --><?php
	}
endif;
add_action( 'kontor_action_header', 'kontor_header_end', 15 );

if ( ! function_exists( 'kontor_content_start' ) ) :
	/**
	 * Header End.
	 *
	 * @since 1.0.0
	 */
	function kontor_content_start() { 
	?>
	<div id="content" class="site-content">
	<?php 

	}
endif;

add_action( 'kontor_action_before_content', 'kontor_content_start', 10 );

if ( ! function_exists( 'kontor_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function kontor_footer_start() {
		if( !(is_home() || is_front_page()) ){
			echo '</div>';
		} ?>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo"><?php
	}
endif;
add_action( 'kontor_action_before_footer', 'kontor_footer_start' );

if ( ! function_exists( 'kontor_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function kontor_footer_end() {?>
		</footer><?php
	}
endif;
add_action( 'kontor_action_after_footer', 'kontor_footer_end' );

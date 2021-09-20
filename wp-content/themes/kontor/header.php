<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kontor
 */
/**
* Hook - kontor_action_doctype.
*
* @hooked kontor_doctype -  10
*/
do_action( 'kontor_action_doctype' );
?>
<head>
<?php
/**
* Hook - kontor_action_head.
*
* @hooked kontor_head -  10
*/
do_action( 'kontor_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<?php

/**
* Hook - kontor_action_before.
*
* @hooked kontor_page_start - 10
*/
do_action( 'kontor_action_before' );

/**
*
* @hooked kontor_header_start - 10
*/
do_action( 'kontor_action_before_header' );

/**
*
*@hooked kontor_site_branding - 10
*@hooked kontor_header_end - 15 
*/
do_action('kontor_action_header');

/**
*
* @hooked kontor_content_start - 10
*/
do_action( 'kontor_action_before_content' );

/**
 * Banner start
 * 
 * @hooked kontor_banner_header - 10
*/
do_action( 'kontor_banner_header' );  

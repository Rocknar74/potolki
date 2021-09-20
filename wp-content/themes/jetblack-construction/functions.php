<?php
/**
 * Child Theme functions and definitions.
 * This theme is a child theme for Jetblack.
 *
 * @package JetBlack Construction
 * @author  FireflyThemes https://fireflythemes.com
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */

/**
 * Theme functions and definitions.
 */
function jetblack_constructionchild_enqueue_styles() {
    wp_enqueue_style( 'jetblack-style' , get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'jetblack-construction-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'jetblack-style' ),
        wp_get_theme()->get('Version')
    );
}
add_action(  'wp_enqueue_scripts', 'jetblack_constructionchild_enqueue_styles' );

/**
 * Loads the child theme textdomain.
 */
function jetblack_constructionsetup() {
    load_child_theme_textdomain( 'jetblack-construction', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'jetblack_constructionsetup', 11 );

/**
 * Customizer additions.
 */
require get_theme_file_path( '/inc/customizer/jetblack-construction-header-options.php' );

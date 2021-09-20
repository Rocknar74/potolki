<?php 
/**
 * Theme Options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();

// Single page Setting Section starts
$wp_customize->add_section('kontor_single_page', 
	array(    
	'title'       => __('Single Page Option', 'kontor'),
	'panel'       => 'theme_option_panel'    
	)
);

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'default'           => $default['single_page_header_image_as_header_image_enable'],
	'sanitize_callback' => 'kontor_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'label'             => esc_html__( 'Enable Header Image As Header Image', 'kontor' ),
	'description' => __('If this option is Enable then Display Header Image as Header Image Otherwise display Featured Image as Header Image  ', 'kontor'),
	'section'           => 'kontor_single_page',
	'type'              => 'checkbox',

) );



 ?>
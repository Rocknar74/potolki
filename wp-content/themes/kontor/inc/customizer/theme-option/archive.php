<?php 
/**
 * Theme Options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();

// Single page Setting Section starts
$wp_customize->add_section('kontor_archive', 
	array(    
	'title'       => __('Archive/Blog Option', 'kontor'),
	'panel'       => 'theme_option_panel'    
	)
);
// Setting excerpt_length.
$wp_customize->add_setting( 'theme_options[excerpt_length]', array(
	'default'           => $default['excerpt_length'],
	'sanitize_callback' => 'kontor_sanitize_positive_integer',
) );
$wp_customize->add_control( 'theme_options[excerpt_length]', array(
	'label'       => esc_html__( 'Excerpt Length', 'kontor' ),
	'description' => esc_html__( 'in words', 'kontor' ),
	'section'     => 'kontor_archive',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 1, 'max' => 200, 'style' => 'width: 55px;' ),
) );


// Add image enable setting and control.
$wp_customize->add_setting( 'theme_options[archive_image_enable]', array(
	'default'           => $default['archive_image_enable'],
	'sanitize_callback' => 'kontor_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[archive_image_enable]', array(
	'label'             => esc_html__( 'Enable Archive post Image', 'kontor' ),
	'section'           => 'kontor_archive',
	'type'              => 'checkbox',
) );

 ?>
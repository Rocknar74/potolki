<?php
/**
 * Video options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();

// Video Author Section
$wp_customize->add_section( 'section_home_video',
	array(
		'title'      => __( 'Video', 'kontor' ),
		'priority'   => 50,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_video_section]',
	array(
		'default'           => $default['disable_video_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kontor_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kontor_Switch_Control( $wp_customize, 'theme_options[disable_video_section]',
    array(
		'label' 			=> __('Enable/Disable Video Section', 'kontor'),
		'section'    		=> 'section_home_video',
		 'settings'  		=> 'theme_options[disable_video_section]',
		'on_off_label' 		=> kontor_switch_options(),
    )
) );

// video title setting and control
$wp_customize->add_setting( 'theme_options[video_title]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'theme_options[video_title]', array(
	'label'           	=>  __( 'Video Title', 'kontor' ),
	'section'        	=> 'section_home_video',
	'settings'    		=> 'theme_options[video_title]',	
	'active_callback' 	=> 'kontor_video_active',
	'type'				=> 'text',
) );
// video title setting and control
$wp_customize->add_setting( 'theme_options[video_subtitle]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'theme_options[video_subtitle]', array(
	'label'           	=>  __( 'Video Sub Title', 'kontor' ),
	'section'        	=> 'section_home_video',
	'settings'    		=> 'theme_options[video_subtitle]',	
	'active_callback' 	=> 'kontor_video_active',
	'type'				=> 'textarea',
) );
// video title setting and control
$wp_customize->add_setting( 'theme_options[video_background_image]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[video_background_image]', array(
	 esc_html__( 'Select Background Image', 'kontor' ),
	'section'        	=> 'section_home_video',
	'settings'    		=> 'theme_options[video_background_image]',	
	'active_callback' 	=> 'kontor_video_active',
) ) );

// video title setting and control
$wp_customize->add_setting( 'theme_options[video_link_url]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( 'theme_options[video_link_url]', array(
	'label'           	=>  __( 'Video Url', 'kontor' ),
	'section'        	=> 'section_home_video',
	'settings'    		=> 'theme_options[video_link_url]',	
	'active_callback' 	=> 'kontor_video_active',
	'type'				=> 'url',
) );
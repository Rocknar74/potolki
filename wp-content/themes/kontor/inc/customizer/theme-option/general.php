<?php 

/**
 * Theme Options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();
//For General Option
$wp_customize->add_section('section_general', array(    
'title'       => __('General Setting', 'kontor'),
'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting( 'theme_options[disable_homepage_content_section]',
	array(
		'default'           => $default['disable_homepage_content_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kontor_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kontor_Switch_Control( $wp_customize, 'theme_options[disable_homepage_content_section]',
    array(
		'label' 			=> __('Enable/Disable Static Homepage Content Section', 'kontor'),
		'description' => __('This option is only work on Static HomePage ', 'kontor'),
		'section'    		=> 'section_general',
		 'settings'  		=> 'theme_options[disable_homepage_content_section]',
		'on_off_label' 		=> kontor_switch_options(),
    )
) );

 ?>
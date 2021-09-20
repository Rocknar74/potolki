<?php
/**
 * Details options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();

// Details section
$wp_customize->add_section( 'section_details',
	array(
		'title'      => __( 'Details Section', 'kontor' ),
		'priority'   => 15,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting( 'theme_options[disable_details_section]',
	array(
		'default'           => $default['disable_details_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kontor_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kontor_Switch_Control( $wp_customize, 'theme_options[disable_details_section]',
    array(
		'label' 			=> __('Disable Details Section', 'kontor'),
		'section'    		=> 'section_details',
		'on_off_label' 		=> kontor_switch_options(),
    )
) );

// Additional Information First Page
$wp_customize->add_setting('theme_options[details_page]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'kontor_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[details_page]', 
	array(
	'label'       => __('Select Page', 'kontor'),
	'section'     => 'section_details',   
	'settings'    => 'theme_options[details_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'kontor_details_active',
	)
);


// Cta Button Text
$wp_customize->add_setting('theme_options[details_button_label]', 
	array(
	'default' 			=> $default['details_button_label'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[details_button_label]', 
	array(
	'label'       => __('Button Label', 'kontor'),
	'section'     => 'section_details',   
	'settings'    => 'theme_options[details_button_label]',	
	'active_callback' => 'kontor_details_active',	
	'type'        => 'text'
	)
);


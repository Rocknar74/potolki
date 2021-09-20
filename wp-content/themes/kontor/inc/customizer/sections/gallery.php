<?php
/**
 * Gallery options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();

// Gallery Section
$wp_customize->add_section( 'section_home_gallery',
	array(
		'title'      => __( ' Gallery Section', 'kontor' ),
		'priority'   => 55,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_gallery_section]',
	array(
		'default'           => $default['disable_gallery_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kontor_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kontor_Switch_Control( $wp_customize, 'theme_options[disable_gallery_section]',
    array(
		'label' 			=> __('Enable/Disable Gallery Section', 'kontor'),
		'section'    		=> 'section_home_gallery',
		'settings'  		=> 'theme_options[disable_gallery_section]',
		'on_off_label' 		=> kontor_switch_options(),
    )
) );

//Gallery Section title
$wp_customize->add_setting('theme_options[gallery_title]', 
	array(
	'default'           => $default['gallery_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[gallery_title]', 
	array(
	'label'       => __('Section Title', 'kontor'),
	'section'     => 'section_home_gallery',   
	'settings'    => 'theme_options[gallery_title]',
	'active_callback' => 'kontor_gallery_active',		
	'type'        => 'text'
	)
);

//Gallery Section title
$wp_customize->add_setting('theme_options[gallery_subtitle]', 
	array(
	'default'           => $default['gallery_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[gallery_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'kontor'),
	'section'     => 'section_home_gallery',   
	'settings'    => 'theme_options[gallery_subtitle]',
	'active_callback' => 'kontor_gallery_active',		
	'type'        => 'text'
	)
);


for( $i=1; $i<=9; $i++ ){

	// Additional Information First Post
	$wp_customize->add_setting('theme_options[gallery_post_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'kontor_dropdown_posts'
		)
	);
	$wp_customize->add_control( new Kontor_Dropdown_Chooser( $wp_customize,'theme_options[gallery_post_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Post #%1$s', 'kontor'), $i),
		'section'     => 'section_home_gallery',  
		'settings'    => 'theme_options[gallery_post_'.$i.']',	
		'choices'			=> kontor_post_choices(),	
		'type'        => 'dropdown-posts',
		'active_callback' => 'kontor_gallery_active',
		)
	));

}

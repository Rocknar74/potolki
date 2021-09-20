<?php
/**
 * Testimonial options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();

// Testimonial Section
$wp_customize->add_section( 'section_home_testimonial',
	array(
		'title'      => __( 'Testimonial Section', 'kontor' ),
		'priority'   => 60,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_testimonial_section]',
	array(
		'default'           => $default['disable_testimonial_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kontor_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kontor_Switch_Control( $wp_customize, 'theme_options[disable_testimonial_section]',
    array(
		'label' 			=> __('Enable/Disable Testimonial Section', 'kontor'),
		'section'    		=> 'section_home_testimonial',
		'settings'  		=> 'theme_options[disable_testimonial_section]',
		'on_off_label' 		=> kontor_switch_options(),
    )
) );

//Testimonial Section title
$wp_customize->add_setting('theme_options[testimonial_title]', 
	array(
	'default'           => $default['testimonial_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_title]', 
	array(
	'label'       => __('Section Title', 'kontor'),
	'section'     => 'section_home_testimonial',   
	'settings'    => 'theme_options[testimonial_title]',
	'active_callback' => 'kontor_testimonial_active',		
	'type'        => 'text'
	)
);

//Testimonial Section title
$wp_customize->add_setting('theme_options[testimonial_subtitle]', 
	array(
	'default'           => $default['testimonial_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'kontor'),
	'section'     => 'section_home_testimonial',   
	'settings'    => 'theme_options[testimonial_subtitle]',
	'active_callback' => 'kontor_testimonial_active',		
	'type'        => 'text'
	)
);


for( $i=1; $i<=3; $i++ ){

	// Additional Information First Post
	$wp_customize->add_setting('theme_options[testimonial_post_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'kontor_dropdown_posts'
		)
	);
	$wp_customize->add_control( new Kontor_Dropdown_Chooser( $wp_customize,'theme_options[testimonial_post_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Post #%1$s', 'kontor'), $i),
		'section'     => 'section_home_testimonial',  
		'settings'    => 'theme_options[testimonial_post_'.$i.']',	
		'choices'			=> kontor_post_choices(),	
		'type'        => 'dropdown-posts',
		'active_callback' => 'kontor_testimonial_active',
		)
	));
	
	// testimonial title setting and control
	$wp_customize->add_setting( 'theme_options[testimonial_position_' . $i . ']', array(
		'type'              => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'theme_options[testimonial_position_' . $i . ']', array(
		'label'           	=> sprintf( __( 'Position %d', 'kontor' ), $i ),
		'section'        	=> 'section_home_testimonial',
		'settings'    		=> 'theme_options[testimonial_position_'.$i.']',	
		'active_callback' 	=> 'kontor_testimonial_active',
		'type'				=> 'text',
	) );

	// testimonial hr setting and control
	$wp_customize->add_setting( 'theme_options[testimonial_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Kontor_Customize_Horizontal_Line( $wp_customize, 'theme_options[testimonial_hr_'. $i .']',
		array(
			'section'         => 'section_home_testimonial',
			'active_callback' => 'kontor_testimonial_active',
			'type'			  => 'hr',
	) ) );
}



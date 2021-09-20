<?php
/**
 * Services options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();

// Services Section
$wp_customize->add_section( 'section_home_service',
	array(
		'title'      => __( 'Services Section', 'kontor' ),
		'priority'   => 10,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_services_section]',
	array(
		'default'           => $default['disable_services_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kontor_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kontor_Switch_Control( $wp_customize, 'theme_options[disable_services_section]',
    array(
		'label' 			=> __('Enable/Disable Service Section', 'kontor'),
		'section'    		=> 'section_home_service',
		 'settings'  		=> 'theme_options[disable_services_section]',
		'on_off_label' 		=> kontor_switch_options(),
    )
) );

//Services Section title
$wp_customize->add_setting('theme_options[service_title]', 
	array(
	'default'           => $default['service_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[service_title]', 
	array(
	'label'       => __('Section Title', 'kontor'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[service_title]',
	'active_callback' => 'kontor_services_active',		
	'type'        => 'text'
	)
);

//Services Section Subtitle
$wp_customize->add_setting('theme_options[service_subtitle]', 
	array(
	'default'           => $default['service_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[service_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'kontor'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[service_subtitle]',
	'active_callback' => 'kontor_services_active',		
	'type'        => 'text'
	)
);

// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[disable_services_icon]', array(
	'default'           => $default['disable_services_icon'],
	'sanitize_callback' => 'kontor_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[disable_services_icon]', array(
	'label' 			=> __('Enable/Disable Service icons', 'kontor'),
	'description' => __('If Services icons is disable then features image is enable', 'kontor'),
	'section'    		=> 'section_home_service',
	'settings'  		=> 'theme_options[disable_services_icon]',
	'type'              => 'checkbox',
	'active_callback' => 'kontor_services_active',
) );

// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[services_content_enable]', array(
	'default'           => $default['services_content_enable'],
	'sanitize_callback' => 'kontor_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[services_content_enable]', array(
	'label'             => esc_html__( 'Enable Services Content', 'kontor' ),
	'section'           => 'section_home_service',
	'type'              => 'checkbox',
	'active_callback' => 'kontor_services_active',
) );


for( $i=1; $i<=6; $i++ ){

		//Services Section icon
	$wp_customize->add_setting('theme_options[service_icon_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control('theme_options[service_icon_'.$i.']', 
		array(
		'label'       => sprintf( __('Icon #%1$s', 'kontor'), $i),
		'description' => sprintf( __('Please input icon as eg: fa-archive. Find Font-awesome icons %1$shere%2$s', 'kontor'), '<a href="' . esc_url( 'https://fontawesome.com/v4.7.0/cheatsheet/' ) . '" target="_blank">', '</a>' ),
		'section'     => 'section_home_service',   
		'settings'    => 'theme_options[service_icon_'.$i.']',
		'active_callback' => 'kontor_services_active',		
		'type'        => 'text'
		)
	);

	// Additional Information First Post
	$wp_customize->add_setting('theme_options[services_post_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'kontor_dropdown_posts'
		)
	);
	$wp_customize->add_control( new Kontor_Dropdown_Chooser( $wp_customize,'theme_options[services_post_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Post #%1$s', 'kontor'), $i),
		'section'     => 'section_home_service',  
		'settings'    => 'theme_options[services_post_'.$i.']',	
		'choices'			=> kontor_post_choices(),	
		'type'        => 'dropdown-posts',
		'active_callback' => 'kontor_services_active',
		)
	));

	// service hr setting and control
	$wp_customize->add_setting( 'theme_options[service_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Kontor_Customize_Horizontal_Line( $wp_customize, 'theme_options[service_hr_'. $i .']',
		array(
			'section'         => 'section_home_service',
			'active_callback' => 'kontor_services_active',
			'type'			  => 'hr',
	) ) );
}


<?php
/**
 * Features options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();

// Features Section
$wp_customize->add_section( 'section_home_features',
	array(
		'title'      => __( 'Features Section', 'kontor' ),
		'priority'   => 15,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_features_section]',
	array(
		'default'           => $default['disable_features_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kontor_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kontor_Switch_Control( $wp_customize, 'theme_options[disable_features_section]',
    array(
		'label' 			=> __('Enable/Disable Features Section', 'kontor'),
		'section'    		=> 'section_home_features',
		 'settings'  		=> 'theme_options[disable_features_section]',
		'on_off_label' 		=> kontor_switch_options(),
    )
) );

//Features Section title
$wp_customize->add_setting('theme_options[features_title]', 
	array(
	'default'           => $default['features_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[features_title]', 
	array(
	'label'       => __('Section Title', 'kontor'),
	'section'     => 'section_home_features',   
	'settings'    => 'theme_options[features_title]',
	'active_callback' => 'kontor_features_active',		
	'type'        => 'text'
	)
);

//Features Section Subtitle
$wp_customize->add_setting('theme_options[features_subtitle]', 
	array(
	'default'           => $default['features_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[features_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'kontor'),
	'section'     => 'section_home_features',   
	'settings'    => 'theme_options[features_subtitle]',
	'active_callback' => 'kontor_features_active',		
	'type'        => 'text'
	)
);

// pricing number control and setting
$wp_customize->add_setting( 'theme_options[features_seperator_image]', array(
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[features_seperator_image]', array(
	'label'             => esc_html__( 'Seperator Image', 'kontor' ),
	'section'           => 'section_home_features',
	'active_callback'   => 'kontor_features_active',
) ) );


//icon disable
$wp_customize->add_setting( 'theme_options[disable_features_icon]',
	array(
		// 'default'           => $default['disable_features_icon'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kontor_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kontor_Switch_Control( $wp_customize, 'theme_options[disable_features_icon]',
    array(
		'label' 			=> __('Enable/Disable Features icons', 'kontor'),
		'description' => __('If Features icons is disable then features image is enable', 'kontor'),
		'section'    		=> 'section_home_features',
		 'settings'  		=> 'theme_options[disable_features_icon]',
		 'active_callback' => 'kontor_features_active',
		'on_off_label' 		=> kontor_switch_options(),
    )
) );




for( $i=1; $i<=6; $i++ ){

		//Features Section icon
	$wp_customize->add_setting('theme_options[features_icon_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control('theme_options[features_icon_'.$i.']', 
		array(
		'label'       => sprintf( __('Icon #%1$s', 'kontor'), $i),
		'description' => sprintf( __('Please input icon as eg: fa-archive. Find Font-awesome icons %1$shere%2$s', 'kontor'), '<a href="' . esc_url( 'https://fontawesome.com/v4.7.0/cheatsheet/' ) . '" target="_blank">', '</a>' ),
		'section'     => 'section_home_features',   
		'settings'    => 'theme_options[features_icon_'.$i.']',
		'active_callback' => 'kontor_features_active',		
		'type'        => 'text'
		)
	);

	// Additional Information First Post
	$wp_customize->add_setting('theme_options[features_post_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'kontor_dropdown_posts'
		)
	);
	$wp_customize->add_control( new Kontor_Dropdown_Chooser( $wp_customize,'theme_options[features_post_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Post #%1$s', 'kontor'), $i),
		'section'     => 'section_home_features',  
		'settings'    => 'theme_options[features_post_'.$i.']',	
		'choices'			=> kontor_post_choices(),	
		'type'        => 'dropdown-posts',
		'active_callback' => 'kontor_features_active',
		)
	));

	// features hr setting and control
	$wp_customize->add_setting( 'theme_options[features_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Kontor_Customize_Horizontal_Line( $wp_customize, 'theme_options[features_hr_'. $i .']',
		array(
			'section'         => 'section_home_features',
			'active_callback' => 'kontor_features_active',
			'type'			  => 'hr',
	) ) );
}


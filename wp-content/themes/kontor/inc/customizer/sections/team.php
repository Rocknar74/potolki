<?php
/**
 * Team options.
 *
 * @package Kontor
 */

$default = kontor_get_default_theme_options();

// Team Section
$wp_customize->add_section( 'section_home_team',
	array(
		'title'      => __( 'Team Section', 'kontor' ),
		'priority'   => 40,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_team_section]',
	array(
		'default'           => $default['disable_team_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kontor_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Kontor_Switch_Control( $wp_customize, 'theme_options[disable_team_section]',
    array(
		'label' 			=> __('Enable/Disable Team Section', 'kontor'),
		'section'    		=> 'section_home_team',
		 'settings'  		=> 'theme_options[disable_team_section]',
		'on_off_label' 		=> kontor_switch_options(),
    )
) );

//Team Section title
$wp_customize->add_setting('theme_options[team_title]', 
	array(
	'default'           => $default['team_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[team_title]', 
	array(
	'label'       => __('Section Title', 'kontor'),
	'section'     => 'section_home_team',   
	'settings'    => 'theme_options[team_title]',
	'active_callback' => 'kontor_team_active',		
	'type'        => 'text'
	)
);

//Team Section title
$wp_customize->add_setting('theme_options[team_subtitle]', 
	array(
	'default'           => $default['team_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[team_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'kontor'),
	'section'     => 'section_home_team',   
	'settings'    => 'theme_options[team_subtitle]',
	'active_callback' => 'kontor_team_active',		
	'type'        => 'text'
	)
);
// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[team_content_enable]', array(
	'default'           => $default['team_content_enable'],
	'sanitize_callback' => 'kontor_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[team_content_enable]', array(
	'label'             => esc_html__( 'Enable Team Content', 'kontor' ),
	'section'           => 'section_home_team',
	'type'              => 'checkbox',
	'active_callback' => 'kontor_team_active',
) );

for( $i=1; $i<=4; $i++ ){

	// Additional Information First Post
	$wp_customize->add_setting('theme_options[team_post_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'kontor_dropdown_posts'
		)
	);
	$wp_customize->add_control( new Kontor_Dropdown_Chooser( $wp_customize,'theme_options[team_post_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Post #%1$s', 'kontor'), $i),
		'section'     => 'section_home_team',  
		'settings'    => 'theme_options[team_post_'.$i.']',	
		'choices'			=> kontor_post_choices(),	
		'type'        => 'dropdown-posts',
		'active_callback' => 'kontor_team_active',
		)
	));


	// team title setting and control
	$wp_customize->add_setting( 'theme_options[team_custom_position_' . $i . ']', array(
		'type'              => 'theme_mod',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'theme_options[team_custom_position_' . $i . ']', array(
		'label'           	=> sprintf( __( 'Position %d', 'kontor' ), $i ),
		'section'        	=> 'section_home_team',
		'settings'    		=> 'theme_options[team_custom_position_'.$i.']',	
		'active_callback' 	=> 'kontor_team_active',
		'type'				=> 'text',
	) );

	// team hr setting and control
	$wp_customize->add_setting( 'theme_options[team_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Kontor_Customize_Horizontal_Line( $wp_customize, 'theme_options[team_hr_'. $i .']',
		array(
			'label'             => __( '<hr style="width: 100%; border: 2px #bcb1b1 solid;"/>', 'kontor' ),
			'section'         => 'section_home_team',
			'active_callback' => 'kontor_team_active',
			'type'			  => 'hr',
	) ) );
}

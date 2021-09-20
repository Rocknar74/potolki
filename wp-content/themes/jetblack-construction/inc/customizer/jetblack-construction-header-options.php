<?php
/**
 * Adds the header options sections, settings, and controls to the theme customizer
 *
 * @package JetBlack
 */

class JetBlack_Construction_Header_Options {
	public function __construct() {
		// Register Header Options.
		add_action( 'customize_register', array( $this, 'register_header_options' ), 100 );

		// Add default options.
		add_filter( 'jetblack_customizer_defaults', array( $this, 'add_defaults' ) );
	}

	/**
	 * Add options to defaults
	 */
	public function add_defaults( $default_options ) {
		$defaults = array(
			'jetblack_header_style'            => 'header-two',
			'jetblack_header_top_color_scheme' => 'dark-top-header', 
		);

		$updated_defaults = wp_parse_args( $defaults, $default_options );

		return $updated_defaults;
	}

	/**
	 * Add header options section and its controls
	 */
	public function register_header_options( $wp_customize ) {
		JetBlack_Customizer_Utilities::register_option(
			array(
				'custom_control'    => 'JetBlack_Image_Radio_Button_Custom_Control',
				'settings'          => 'jetblack_header_style',
				'sanitize_callback' => 'jetblack_radio_sanitization',
				'label'             => esc_html__( 'Header Style', 'jetblack-construction' ),
				'section'           => 'jetblack_header_options',
				'choices'           => array(
					'header-one'   => array(
						'image' => trailingslashit( get_stylesheet_directory_uri() ) . 'images/header-1.png',
						'name'  => esc_html__( 'Header Style One', 'jetblack-construction' ),
					),
					'header-two'   => array(
						'image' => trailingslashit( get_stylesheet_directory_uri() ) . 'images/header-2.png',
						'name'  => esc_html__( 'Header Style Two', 'jetblack-construction' ),
					)
				),
			)
		);

		JetBlack_Customizer_Utilities::register_option(
			array(
				'type'              => 'radio',
				'settings'          => 'jetblack_header_top_color_scheme',
				'sanitize_callback' => 'jetblack_sanitize_select',
				'label'             => esc_html__( 'Header Top Color', 'jetblack-construction' ),
				'section'           => 'jetblack_header_options',
				'choices'           => array(
					'dark-top-header'  => esc_html__( 'Dark', 'jetblack-construction' ),
					'light-top-header' => esc_html__( 'Light', 'jetblack-construction' ),
				),
			)
		);

		JetBlack_Customizer_Utilities::register_option(
			array(
				'custom_control'    => 'WP_Customize_Image_Control',
				'sanitize_callback' => 'esc_url_raw',
				'settings'          => 'jetblack_testimonial_bg_image',
				'label'             => esc_html__( 'Background Image', 'jetblack-construction' ),
				'section'           => 'jetblack_ss_testimonial',
				'active_callback'   => array( $this, 'is_testimonial_visible' ),
			)
		);
	}

	/**
	 * Testimonial visibility active callback.
	 */
	public function is_testimonial_visible( $control ) {
		return ( jetblack_display_section( $control->manager->get_setting( 'jetblack_testimonial_visibility' )->value() ) );
	}
}

/**
 * Initialize class
 */
$jetblack_construction_header_options = new JetBlack_Construction_Header_Options();

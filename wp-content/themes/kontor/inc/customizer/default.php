<?php
/**
 * Default theme options.
 *
 * @package Kontor
 */

if ( ! function_exists( 'kontor_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function kontor_get_default_theme_options() {

	$theme_data = wp_get_theme();
	$defaults = array();
	$defaults['colorscheme_hue']			= '#0388fc';

	$defaults['disable_homepage_content_section']			= true;

	// Featured Slider Section
	$defaults['disable_featured-slider_section']	= false;
	$defaults['number_of_slider_items']				= 3;
	$defaults['slider_speed']						= 800;
	
	// About Section
	$defaults['disable_features_section']	= false;
	$defaults['features_title']	   	 		= esc_html__( 'Our Features', 'kontor' );
	$defaults['features_subtitle']	   	 	= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'kontor' );


	// Our Service Section
	$defaults['disable_services_section']	= false;
	$defaults['service_title']	   	 		= esc_html__( 'Our Services', 'kontor' );
	$defaults['service_subtitle']	   	 	= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'kontor' );
	$defaults['services_content_enable']	= true;
	$defaults['disable_services_icon']		= true;

	// video Section
	$defaults['disable_video_section']	= false;

	// gallery Section
	$defaults['disable_gallery_section']	= false;
	$defaults['gallery_title']	   	 		= esc_html__( 'Our Gallery', 'kontor' );
	$defaults['gallery_subtitle']	   	 	= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'kontor' );


	// Testimonial Section
	$defaults['disable_testimonial_section']	= false;
	$defaults['testimonial_title']	   	 		= esc_html__( 'Happy Customer', 'kontor' );
	$defaults['testimonial_subtitle']	   	 	= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'kontor' );

	// Team Section
	$defaults['disable_team_section']	= false;
	$defaults['team_content_enable']	= false;
	$defaults['team_title']	   	 		= esc_html__( 'Our Team', 'kontor' );
	$defaults['team_subtitle']	   	 	= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'kontor' );

	//Cta Section	
	$defaults['disable_cta_section']	   	= false;
	$defaults['background_cta_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['cta_small_description']	   	= esc_html__( 'Need More Help?', 'kontor' );
	$defaults['cta_description']	   	 	= esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting', 'kontor' );
	$defaults['cta_button_label']	   	 	= esc_html__( 'Purchase Now', 'kontor' );
	$defaults['cta_button_url']	   	 		= '#';
	$defaults['cta_alt_button_label']	   	= esc_html__( 'Contact Us', 'kontor' );
	$defaults['cta_alt_button_url']	   	 	= '#';

	//Cta Section	
	$defaults['disable_details_section']	   	= false;
	$defaults['background_details_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['details_custom_title']	   		= esc_html__( 'About Us', 'kontor' );
	$defaults['details_subtitle']	   	 		= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'kontor' );
	$defaults['details_custom_description']	   	 = esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting', 'kontor' );
	$defaults['details_button_label']	   	 	= esc_html__( 'Purchase Now', 'kontor' );
	$defaults['details_button_url']	   	 		= '#';
	$defaults['details_content_enable']				= true;


	// Blog Section
	$defaults['disable_blog_section']		= false;
	$defaults['blog_title']	   	 			= esc_html__( 'Latest Post', 'kontor' ); 
	$defaults['blog_subtitle']	   	 	= esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'kontor' );
	$defaults['blog_content_enable']				= true;
	$defaults['blog_category_enable']				= true;

	// Latest Section
	$defaults['disable_latest_section']		= true;
	$defaults['latest_title']	   	 		= esc_html__( 'Latest News', 'kontor' );
	$defaults['latest_number']				= 3;
	$defaults['number_of_latest_column']		= 3;
	$defaults['latest_content_type']			= 'latest_category';

	//General Section
	$defaults['blog_readmore_text']				= esc_html__('Read More','kontor');
	$defaults['excerpt_length']				= 40;
	$defaults['layout_options_blog']			= 'no-sidebar';
	$defaults['layout_options_archive']			= 'right-sidebar';
	$defaults['layout_options_page']			= 'right-sidebar';	
	$defaults['layout_options_single']			= 'right-sidebar';

	$defaults['post_category_enable']			= true;	
	$defaults['post_comment_enable']			= true;	
	$defaults['post_image_enable']				= true;	
	$defaults['post_header_image_enable']		= true;	
	$defaults['post_meta_enable']				= true;		
	$defaults['post_pagination_enable']			= true;		
	$defaults['single_page_header_image_as_header_image_enable']			= true;	

	$defaults['archive_category_enable']			= true;	
	$defaults['archive_content_enable']			= true;	
	$defaults['archive_image_enable']				= true;	
	$defaults['archive_header_image_enable']		= true;	
	$defaults['archive_meta_enable']				= true;		

	$defaults['page_image_enable']				= true;	
	$defaults['page_header_image_enable']		= true;	
	$defaults['single_post_header_image_as_header_image_enable']		= true;


	//Footer section 		
	$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'kontor' );

	// Pass through filter.
	$defaults = apply_filters( 'kontor_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'kontor_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function kontor_get_option( $key ) {

		$default_options = kontor_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;
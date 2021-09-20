<?php 
/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function kontor_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'kontor' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

if ( ! function_exists( 'kontor_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function kontor_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'On', 'kontor' ),
            'off'       => esc_html__( 'Off', 'kontor' )
        );
        return apply_filters( 'kontor_switch_options', $arr );
    }
endif;


 /**
 * Get an array of google fonts.
 * 
 */
function kontor_font_choices() {
    $font_family_arr = array();
    $font_family_arr[''] = esc_html__( '--Default--', 'kontor' );

    // Make the request
    $request = wp_remote_get( get_theme_file_uri( 'assets/fonts/webfonts.json' ) );

    if( is_wp_error( $request ) ) {
        return false; // Bail early
    }
    // Retrieve the data
    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );
    if ( ! empty( $data ) ) {
        foreach ( $data->items as $items => $fonts ) {
            $family_str_arr = explode( ' ', $fonts->family );
            $family_value = implode( '-', array_map( 'strtolower', $family_str_arr ) );
            $font_family_arr[ $family_value ] = $fonts->family;
        }
    }

    return apply_filters( 'kontor_font_choices', $font_family_arr );
}

if ( ! function_exists( 'kontor_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function kontor_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'kontor' ),
            'header-font-1'     => esc_html__( 'Raleway', 'kontor' ),
            'header-font-2'     => esc_html__( 'Poppins', 'kontor' ),
            'header-font-3'     => esc_html__( 'Roboto', 'kontor' ),
            'header-font-4'     => esc_html__( 'Open Sans', 'kontor' ),
            'header-font-5'     => esc_html__( 'Lato', 'kontor' ),
            'header-font-6'   => esc_html__( 'Shadows Into Light', 'kontor' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'kontor' ),
            'header-font-8'   => esc_html__( 'Lora', 'kontor' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'kontor' ),
            'header-font-10'   => esc_html__( 'Muli', 'kontor' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'kontor' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'kontor' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'kontor' ),
            'header-font-14'   => esc_html__( 'Cairo', 'kontor' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'kontor' ),
            'header-font-16'   => esc_html__( 'IBM Plex Sans', 'kontor' ),
            'header-font-17'   => esc_html__( 'Tangerine', 'kontor' ),
            'header-font-18'   => esc_html__( 'Montserrat', 'kontor' ),
        );

        $output = apply_filters( 'kontor_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;


if ( ! function_exists( 'kontor_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function kontor_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'kontor' ),
            'body-font-1'     => esc_html__( 'Raleway', 'kontor' ),
            'body-font-2'     => esc_html__( 'Poppins', 'kontor' ),
            'body-font-3'     => esc_html__( 'Roboto', 'kontor' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'kontor' ),
            'body-font-5'     => esc_html__( 'Lato', 'kontor' ),
            'body-font-6'   => esc_html__( 'Shadows Into Light', 'kontor' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'kontor' ),
            'body-font-8'   => esc_html__( 'Lora', 'kontor' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'kontor' ),
            'body-font-10'   => esc_html__( 'Muli', 'kontor' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'kontor' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'kontor' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'kontor' ),
            'body-font-14'   => esc_html__( 'Cairo', 'kontor' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'kontor' ),
            'body-font-16'   => esc_html__( 'IBM Plex Sans', 'kontor' ),
            'body-font-18'   => esc_html__( 'Montserrat', 'kontor' ),
        );

        $output = apply_filters( 'kontor_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

if ( ! function_exists( 'kontor_subtitle_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function kontor_subtitle_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'kontor' ),
            'subtitle-font-1'     => esc_html__( 'Raleway', 'kontor' ),
            'subtitle-font-2'     => esc_html__( 'Poppins', 'kontor' ),
            'subtitle-font-3'     => esc_html__( 'Roboto', 'kontor' ),
            'subtitle-font-4'     => esc_html__( 'Open Sans', 'kontor' ),
            'subtitle-font-5'     => esc_html__( 'Lato', 'kontor' ),
            'subtitle-font-6'   => esc_html__( 'Shadows Into Light', 'kontor' ),
            'subtitle-font-7'   => esc_html__( 'Playfair Display', 'kontor' ),
            'subtitle-font-8'   => esc_html__( 'Lora', 'kontor' ),
            'subtitle-font-9'   => esc_html__( 'Titillium Web', 'kontor' ),
            'subtitle-font-10'   => esc_html__( 'Muli', 'kontor' ),
            'subtitle-font-11'   => esc_html__( 'Oxygen', 'kontor' ),
            'subtitle-font-12'   => esc_html__( 'Nunito Sans', 'kontor' ),
            'subtitle-font-13'   => esc_html__( 'Maven Pro', 'kontor' ),
            'subtitle-font-14'   => esc_html__( 'Cairo', 'kontor' ),
            'subtitle-font-15'   => esc_html__( 'Philosopher', 'kontor' ),
            'subtitle-font-16'   => esc_html__( 'IBM Plex Sans', 'kontor' ),
            'subtitle-font-17'   => esc_html__( 'Tangerine', 'kontor' ),
            'subtitle-font-18'   => esc_html__( 'Montserrat', 'kontor' ),
        );
        $output = apply_filters( 'kontor_subtitle_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

 ?>
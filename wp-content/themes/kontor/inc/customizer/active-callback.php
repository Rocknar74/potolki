<?php
/**
 * Active callback functions.
 *
 * @package Kontor
 */

function kontor_counter_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_counter_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_client_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_client_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}


function kontor_pricing_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_pricing_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_testimonial_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_testimonial_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_testimonial_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( kontor_testimonial_active( $control ) && ( 'testimonial_custom' == $content_type ) );
} 

function kontor_testimonial_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( kontor_testimonial_active( $control ) && ( 'testimonial_page' == $content_type ) );
}

function kontor_testimonial_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( kontor_testimonial_active( $control ) && ( 'testimonial_post' == $content_type ) );
}

function kontor_testimonial_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( kontor_testimonial_active( $control ) && ( 'testimonial_category' == $content_type ) );
}

function kontor_gallery_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_gallery_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_gallery_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( kontor_gallery_active( $control ) && ( 'gallery_custom' == $content_type ) );
} 

function kontor_gallery_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( kontor_gallery_active( $control ) && ( 'gallery_page' == $content_type ) );
}

function kontor_gallery_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( kontor_gallery_active( $control ) && ( 'gallery_post' == $content_type ) );
}

function kontor_gallery_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( kontor_gallery_active( $control ) && ( 'gallery_category' == $content_type ) );
}

function kontor_video_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_video_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}


function kontor_pricing_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_pricing_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_project_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_project_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_project_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( kontor_project_active( $control ) && ( 'project_custom' == $content_type ) );
} 

function kontor_project_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( kontor_project_active( $control ) && ( 'project_page' == $content_type ) );
}

function kontor_project_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( kontor_project_active( $control ) && ( 'project_post' == $content_type ) );
}

function kontor_project_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( kontor_project_active( $control ) && ( 'project_category' == $content_type ) );
}



function kontor_team_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_team_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_team_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( kontor_team_active( $control ) && ( 'team_custom' == $content_type ) );
} 

function kontor_team_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( kontor_team_active( $control ) && ( 'team_page' == $content_type ) );
}

function kontor_team_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( kontor_team_active( $control ) && ( 'team_post' == $content_type ) );
}

function kontor_team_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( kontor_team_active( $control ) && ( 'team_category' == $content_type ) );
}



function kontor_services_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_services_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_services_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return ( kontor_services_active( $control ) && ( 'service_page' == $content_type ) );
}

function kontor_services_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return ( kontor_services_active( $control ) && ( 'service_post' == $content_type ) );
}

function kontor_services_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return ( kontor_services_active( $control ) && ( 'service_category' == $content_type ) );
}

function kontor_services_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return ( kontor_services_active( $control ) && ( 'service_custom' == $content_type ) );
}

function kontor_services_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return  kontor_services_seperator( $control ) && ( in_array( $content_type, array( 'service_page', 'service_post', 'service_custom' ) ) ) ;
}

function kontor_services_seperator_image( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[home_page_layout_content_type]' )->value();
    return ( kontor_services_active( $control ) && ( 'home-two' == $content_type ) );
}

function kontor_services_icon_active( $control ) {
    if(($control->manager->get_setting( 'theme_options[disable_services_icon]' )->value() == true ) ) {
        return true;
    }else{
        return false;
    }
}


function kontor_course_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_course_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_course_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[course_content_type]' )->value();
    return ( kontor_course_active( $control ) && ( 'course_page' == $content_type ) );
}

function kontor_course_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[course_content_type]' )->value();
    return ( kontor_course_active( $control ) && ( 'course_post' == $content_type ) );
}

function kontor_course_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[course_content_type]' )->value();
    return ( kontor_course_active( $control ) && ( 'course_category' == $content_type ) );
}

function kontor_course_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[course_content_type]' )->value();
    return ( kontor_course_active( $control ) && ( 'course_custom' == $content_type ) );
}

function kontor_course_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[course_content_type]' )->value();
    return  kontor_course_seperator( $control ) && ( in_array( $content_type, array( 'course_page', 'course_post', 'course_custom' ) ) ) ;
}

function kontor_course_icon( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[home_page_layout_content_type]' )->value();
    return ( kontor_course_active( $control ) && ( 'home-two' == $content_type ) );
}

function kontor_kidproduct_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_kidproduct_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_kidproduct_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[kidproduct_content_type]' )->value();
    return ( kontor_kidproduct_active( $control ) && ( 'kidproduct_page' == $content_type ) );
}

function kontor_kidproduct_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[kidproduct_content_type]' )->value();
    return ( kontor_kidproduct_active( $control ) && ( 'kidproduct_post' == $content_type ) );
}

function kontor_kidproduct_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[kidproduct_content_type]' )->value();
    return ( kontor_kidproduct_active( $control ) && ( 'kidproduct_category' == $content_type ) );
}

function kontor_kidproduct_product( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[kidproduct_content_type]' )->value();
    return ( kontor_kidproduct_active( $control ) && ( 'product' == $content_type ) );
}

function kontor_kidproduct_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[kidproduct_content_type]' )->value();
    return  kontor_kidproduct_seperator( $control ) && ( in_array( $content_type, array( 'kidproduct_page', 'kidproduct_post', 'kidproduct_custom' ) ) ) ;
}


function kontor_features_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_features_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_features_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( kontor_features_active( $control ) && ( 'features_page' == $content_type ) );
}

function kontor_features_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( kontor_features_active( $control ) && ( 'features_post' == $content_type ) );
}

function kontor_features_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( kontor_features_active( $control ) && ( 'features_category' == $content_type ) );
}

function kontor_information_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_information_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_information_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( kontor_information_active( $control ) && ( 'information_custom' == $content_type ) );
} 

function kontor_information_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( kontor_information_active( $control ) && ( 'information_page' == $content_type ) );
}

function kontor_information_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( kontor_information_active( $control ) && ( 'information_post' == $content_type ) );
}

function kontor_information_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( kontor_information_active( $control ) && ( 'information_category' == $content_type ) );
}


function kontor_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured-slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return ( kontor_slider_active( $control ) && ( 'slider_page' == $content_type ) );
}

function kontor_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return ( kontor_slider_active( $control ) && ( 'slider_post' == $content_type ) );
}

function kontor_slider_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return  kontor_slider_seperator( $control ) && ( in_array( $content_type, array( 'slider_page', 'slider_post', 'slider_custom' ) ) ) ;
}

function kontor_slider_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return ( kontor_slider_active( $control ) && ( 'slider_custom' == $content_type ) );
}

function kontor_slider_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return ( kontor_slider_active( $control ) && ( 'slider_category' == $content_type ) );
}



function kontor_cta_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_cta_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_cta_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( kontor_cta_active( $control ) && ( 'cta_custom' == $content_type ) );
} 

function kontor_cta_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( kontor_cta_active( $control ) && ( 'cta_page' == $content_type ) );
}

function kontor_cta_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( kontor_cta_active( $control ) && ( 'cta_post' == $content_type ) );
}

function kontor_details_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_details_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_details_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( kontor_details_active( $control ) && ( 'details_custom' == $content_type ) );
} 

function kontor_details_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( kontor_details_active( $control ) && ( 'details_page' == $content_type ) );
}

function kontor_details_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( kontor_details_active( $control ) && ( 'details_post' == $content_type ) );
}
function kontor_blog_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_blog_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_blog_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( kontor_blog_active( $control ) && ( 'blog_page' == $content_type ) );
}

function kontor_blog_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( kontor_blog_active( $control ) && ( 'blog_post' == $content_type ) );
}

function kontor_blog_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( kontor_blog_active( $control ) && ( 'blog_category' == $content_type ) );
}



function kontor_latest_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_latest_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function kontor_latest_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[latest_content_type]' )->value();
    return ( kontor_latest_active( $control ) && ( 'latest_page' == $content_type ) );
}

function kontor_latest_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[latest_content_type]' )->value();
    return ( kontor_latest_active( $control ) && ( 'latest_post' == $content_type ) );
}

function kontor_latest_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[latest_content_type]' )->value();
    return ( kontor_latest_active( $control ) && ( 'latest_category' == $content_type ) );
}

/**
 * Active Callback for top bar section
 */
function kontor_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_info]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_location]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_email]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_phone]' && $show_contact_info ) return true;

    return false;
}

function kontor_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_social_links]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
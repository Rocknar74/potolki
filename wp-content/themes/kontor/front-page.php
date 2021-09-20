<?php
/**
 * The template for displaying home page.
 * @package Kontor
 */

if ( 'posts' != get_option( 'show_on_front' ) ){ 
    get_header(); ?>
    <?php $enabled_sections = kontor_get_sections();
    if( is_array( $enabled_sections ) ) {
        foreach( $enabled_sections as $section ) {
            $cloud_enable = kontor_get_option('disable_homepage_cloud_section');
            if( ( $section['id'] == 'featured-slider' ) ){ ?>
                <?php $disable_featured_slider = kontor_get_option( 'disable_featured-slider_section' );
                if( true == $disable_featured_slider): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        
                    </section>
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'services' ) { ?>
                <?php $disable_services_section = kontor_get_option( 'disable_services_section' );
                if( true ==$disable_services_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="page-section relative">
                        <div class="services-wrapper">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                            
                        </div>
                        </div>
                    </section>
            <?php endif; ?>

             <?php } elseif( $section['id'] == 'features' ) { ?>
                <?php $disable_features_section = kontor_get_option( 'disable_features_section' );
                if( true ==$disable_features_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="page-section relative">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
            <?php endif; ?>

        <?php } elseif( $section['id'] == 'cta' ) { ?>
                <?php $disable_cta_section = kontor_get_option( 'disable_cta_section' );
                $background_cta_section = kontor_get_option( 'background_cta_section' );
                if( true ==$disable_cta_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" style="background-image: url('<?php echo esc_url( $background_cta_section );?>');">
                        <div class="overlay"></div>
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>

                    </section>
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'details' ) { ?>
                <?php $disable_details_section = kontor_get_option( 'disable_details_section' );
                if( true ==$disable_details_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="page-section relative">

                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>

                    </section>
            <?php endif; ?>          


            <?php } elseif( $section['id'] == 'team' ) { ?>
            <?php $disable_team_section = kontor_get_option( 'disable_team_section' );
            if( true ==$disable_team_section): ?>
                <section id="<?php echo esc_attr( $section['id'] ); ?>" class="page-section clear">
                    <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                </section>
            <?php endif; ?>

            <?php } elseif ( $section['id'] == 'video' ) { ?>
                <?php $disable_video_section = kontor_get_option( 'disable_video_section' );
                $video_background_image     = kontor_get_option( 'video_background_image' );
                if( true === $disable_video_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" style="background-image: url('<?php echo esc_url( $video_background_image );?>');">
                        <div class="overlay"></div>
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                <?php endif; ?>

            <?php } elseif( $section['id'] == 'gallery' ) { ?>
                <?php $disable_gallery_section = kontor_get_option( 'disable_gallery_section' );
                if( true ==$disable_gallery_section): ?>
                    
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="page-section clear">
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </section>
            <?php endif; ?>
            <?php } elseif( $section['id'] == 'testimonial' ) { ?>
            <?php $disable_testimonial_section = kontor_get_option( 'disable_testimonial_section' );
            $testimonial_image = kontor_get_option( 'testimonial_image' );
            if( true ==$disable_testimonial_section): ?>
                <section id="<?php echo esc_attr( $section['id'] ); ?>" style="background-image: url('<?php echo esc_url( $testimonial_image );?>');">
                
                    <div class="wrapper">
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </div>
                </section>            
            <?php endif; ?>

           <?php } elseif ( $section['id'] == 'blog' ) { ?>
                <?php $disable_blog_section = kontor_get_option( 'disable_blog_section' );
                if( true === $disable_blog_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                <?php endif; 

                
            }
        }
    }
    $disable_homepage_content_section = kontor_get_option( 'disable_homepage_content_section' );
    if(($disable_homepage_content_section == true )) { ?>
        <div class="wrapper">
           <?php include( get_page_template() ); ?>
        </div>
     <?php  }
  get_footer();
} elseif ('posts' == get_option( 'show_on_front' ) ) { ?>

        <?php include( get_home_template() ); ?>
<?php } 
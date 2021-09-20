<?php 
/**
 * Template part for displaying Services Section
 *
 *@package Kontor
 */

    $service_title       = kontor_get_option( 'service_title' );
    $service_subtitle       = kontor_get_option( 'service_subtitle' );
    $disable_services_icon = kontor_get_option( 'disable_services_icon' );
    $services_content   = kontor_get_option( 'services_content_enable' );
    for( $i=1; $i<=6; $i++ ) :
        $services_post_posts[] = absint(kontor_get_option( 'services_post_'.$i ) );
        $services_icon   = kontor_get_option( 'services_icon_'.$i );
    endfor;
    ?>
    <?php if( !empty($service_title) || ! empty($service_sub_title ) ):?>
        <div class="section-header">
        <?php if( !empty($service_title)):?>
            <h2 class="section-title"><?php echo esc_html($service_title);?></h2>
        <?php endif;?>
            <?php if ( ! empty($service_subtitle ) ) : ?>
            <p class="section-subtitle"><?php echo esc_html( $service_subtitle ); ?></p>
        <?php endif; ?><!-- .section-header -->
        </div>
        
    <?php endif; 
    $home_layout= kontor_get_option('home_page_layout_content_type');
    ?>
    
    <div class="section-content col-3">
        <?php 
            $args = array (
                'post_type'     => 'post',
                'post_per_page' => count( $services_post_posts ),
                'post__in'      => $services_post_posts,
                'orderby'       =>'post__in', 
                'ignore_sticky_posts' => true, 
            ); 
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
                $i=0;  
                while ($loop->have_posts()) : $loop->the_post(); $i++;?>
                    <article>
                        <div class="service-item-wrapper">
                        <?php 
                        $services_icon = kontor_get_option( 'service_icon_'.$i );
                        if ( ( true == $disable_services_icon ) && !empty($services_icon) ) { ?>
                            <div class="icon-container">
                                <a href="<?php the_permalink();?>">
                                <i class="fa <?php echo esc_attr( $services_icon)?>"></i>
                            </a>
                            </div>
                        <?php  } ?>
                        <?php if ( ( has_post_thumbnail() ) && ( false == $disable_services_icon )  ) : ?>
                            <div class="featured-image">
                                <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                            </div><!-- .featured-image -->
                        <?php endif; ?>
                        <div class="service-content">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>
                            <div class="entry-content">
                                <?php
                                    $excerpt = kontor_the_excerpt( 15 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->
                        </div>
                      </div>
                    </article>
                <?php endwhile;?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
    </div> 
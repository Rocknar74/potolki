<?php  
    $testimonial_title = kontor_get_option( 'testimonial_title' );
    $testimonial_subtitle = kontor_get_option( 'testimonial_subtitle' );
    for( $i=1; $i<=3; $i++ ) :
        $testimonial_post_posts[] = absint(kontor_get_option( 'testimonial_post_'.$i ) );
        $testimonial_position     = kontor_get_option( 'testimonial_position_'. $i );
    endfor; 
?>            
    <?php if ( ! empty( $testimonial_title ) || ! empty( $testimonial_subtitle ) ) : ?>
       <div class="section-header">
         <?php if(!empty($testimonial_title)):?>
            <h2 class="section-title"><?php echo esc_html($testimonial_title); ?></h2>                                  
        <?php endif; 
        if(!empty($testimonial_subtitle)):?>
            <p class="section-subtitle"><?php echo esc_html($testimonial_subtitle); ?></p>
        <?php endif; ?>
        </div><!-- .section-header -->
    <?php endif; 
    $home_layout= kontor_get_option('home_page_layout_content_type'); ?>  
    <div class="section-content">
        <div class="testimonial-slider" data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": true, "arrows":true, "autoplay": true, "fade": false, "draggable": true }'>      
            <?php $args = array (
                'post_type'     => 'post',
                'post_per_page' => count( $testimonial_post_posts ),
                'post__in'      => $testimonial_post_posts,
                'orderby'       =>'post__in', 
            ); 
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
                $i=0;  
                while ($loop->have_posts()) : $loop->the_post(); $i++;?>
                    <article  class="testi-cloud-disable">
                        <div class="slick-item">
                            <div class="quote">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/quote.png' ); ?>">
                            </div><!-- .quote -->
                            <div class="client-wrapper">
                                <div class="featured-image">
                                    <img src="<?php the_post_thumbnail_url('gallery');  ?>" alt="<?php the_title();?>">
                                </div><!-- .featured-image -->
                                <header class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                </header>
                                <?php $testimonial_position     = kontor_get_option( 'testimonial_position_'. $i );
                                    if ( ! empty( $testimonial_position ) ) : ?>
                                    <div class="client-meta">
                                        <span class="designation"><?php echo esc_html( $testimonial_position ); ?></span>
                                    </div><!-- .client-meta -->
                                <?php endif; ?>
                                <div class="entry-content">
                                    <?php 
                                        $excerpt = kontor_the_excerpt( 20 );
                                        echo wp_kses_post( wpautop( $excerpt ) );
                                    ?>
                                </div><!-- .entry-content -->     
                            </div><!-- .client-wrapper -->
                        </div><!-- .slick-item -->
                    </article>
               
                <?php endwhile;?>
            <?php  endif; ?>
        </div><!-- .testimonial-slider -->
    </div><!-- .section-content -->

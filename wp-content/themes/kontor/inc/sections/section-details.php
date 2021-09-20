<?php 
/**
 * Template part for displaying Details Section
 *
 *@package Kontor
 */
    $details_content_type     = kontor_get_option( 'details_content_type' );
    $details_button_label       = kontor_get_option( 'details_button_label' );
    $details_subtitle       = kontor_get_option( 'details_subtitle' );
?>


    <?php 
        $details_id = kontor_get_option( 'details_page' );
            $args = array (
            'post_type'     => 'page',
            'posts_per_page' => 1,
            'p' => $details_id,
            
        ); 
        $the_query = new WP_Query( $args );

        // The Loop
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <article class="has-post-thumbnail">
                <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
                </div><!-- .featured-image -->
                <div class="entry-container">
                    <header class="section-head">
                        <h2 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>

                    <div class="entry-content">
                        <?php
                            $excerpt = kontor_the_excerpt( 40 );
                            echo wp_kses_post( wpautop( $excerpt ) );
                        ?>
                    </div><!-- .entry-content -->

                    <div class="read-more">
                        <?php if ( ! empty( $details_button_label ) ) : ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html($details_button_label); ?></a>
                        <?php endif; ?>
                    </div>
                </div><!-- .entry-container -->
                
            </article>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

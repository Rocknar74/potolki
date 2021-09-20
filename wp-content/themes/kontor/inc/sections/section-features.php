<?php 
/**
 * Template part for displaying Services Section
 *
 *@package Kontor
 */

    $features_title       =kontor_get_option( 'features_title' );
    $features_subtitle       =kontor_get_option( 'features_subtitle' );;
    for( $i=1; $i<=6; $i++ ) :
        $features_post_posts[] = absint(kontor_get_option( 'features_post_'.$i ) );
        $features_icon   =kontor_get_option( 'features_icon_'.$i );
    endfor;
    ?>

    <?php if( !empty($features_title) || ! empty($features_sub_title ) ):?>
        <div class="section-header">
        <?php if( !empty($features_title)):?>
            <h2 class="section-title"><?php echo esc_html($features_title);?></h2>
        <?php endif;?>
            <?php if ( ! empty($features_subtitle ) ) : ?>
            <p class="section-subtitle"><?php echo esc_html( $features_subtitle ); ?></p>
        <?php endif; ?><!-- .section-header -->
        </div>
        
    <?php endif; 
    ?>
    
<div class="section-content clear">
    <?php 
            $args = array (
                'post_type'     => 'post',
                'post_per_page' => count( $features_post_posts ),
                'post__in'      => $features_post_posts,
                'orderby'       =>'post__in', 
            ); 
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
            $i=0;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>
                    <article class="hentry">
                    <?php 
                        $features_icon =kontor_get_option( 'features_icon_'.$i );
                        if ( !empty($features_icon) ) { ?>
                            <div class="icon-container">
                                <i class="fa <?php echo esc_attr( $features_icon); ?>"></i>
                            </div><!-- .icon-container -->
                        <?php } ?>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <div class="entry-content">
                            <?php $excerpt =kontor_the_excerpt( 10 );
                                    echo wp_kses_post( wpautop( $excerpt ) ); ?>
                        </div><!-- .entry-content -->
                    </article><!-- .hentry -->
                <?php 
                    $features_seperator_image =kontor_get_option( 'features_seperator_image');?>
                    <?php if ( $i == 2 ) : ?>
                        <div class="featured-image" style="background-image: url('<?php echo esc_url( $features_seperator_image ); ?>');"></div>
                    <?php endif;  
                 ?>
            <?php endwhile;?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div> 
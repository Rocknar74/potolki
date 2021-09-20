<?php 
/**
 * Template part for displaying Gallery Section
 *
 *@package Kontor
 */

    $gallery_title       = kontor_get_option( 'gallery_title' );
    $gallery_subtitle       = kontor_get_option( 'gallery_subtitle' );
    for( $i=1; $i<=9; $i++ ) :
        $gallery_post_posts[] = absint(kontor_get_option( 'gallery_post_'.$i ) );
    endfor;
    ?>
<div class="wrapper"> 
    <?php if( !empty($gallery_title) || ! empty($gallery_subtitle) ):?>
        <div class="section-header">
            <?php if( !empty($gallery_title)):?>
                <h2 class="section-title"><?php echo esc_html($gallery_title);?></h2>
            <?php endif;?>
                <?php if ( ! empty($gallery_subtitle) ) : ?>
                <p class="section-subtitle"><?php echo esc_html( $gallery_subtitle ); ?></p>
            <?php endif; ?><!-- .section-header -->
        </div>       
    <?php endif;?>       
    <div class="section-content col-3 gallery-popup ">
        <?php 
        $args = array (
            'post_type'     => 'post',
            'post_per_page' => count( $gallery_post_posts ),
            'post__in'      => $gallery_post_posts,
            'orderby'       =>'post__in',
            'ignore_sticky_posts' => true,  
        ); 
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
            $i=0;  
            while ($loop->have_posts()) : $loop->the_post(); ?> 

                <article>
                    <div class="gallery-item-wrapper" >
                        <div class="gallery-overlay">
                            <div class="overlay-bg"></div>
                        </div><!-- .gallery-overlay -->
                        <div class="featured-image"style="background-image: url('<?php the_post_thumbnail_url();?>');">
                        </div><!-- .featured-image -->
                        <div class="entry-container">
                            <a href="<?php the_post_thumbnail_url( '');?>" class="popup"><i class="fa fa-plus"></i></a>
                            <header class="entry-header">
                                <h2 class="entry-title"><?php the_title(); ?></h2>
                            </header>
                        </div><!-- .entry-container -->
                    </div><!-- .gallery-item-wrapper -->
                </article>      
            <?php $i++; ?>
        
            <?php endwhile;?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>  
</div>

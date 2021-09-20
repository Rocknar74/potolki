<?php 
/**
 * Template part for displaying Video Section
 *
 *@package Kontor
 */

    $video_link_url     = kontor_get_option( 'video_link_url' );
    $video_title     = kontor_get_option( 'video_title' );
    $video_subtitle     = kontor_get_option( 'video_subtitle' );
    ?>

        <div class="video-wrapper has-featured-image">
            <div class="featured-image">
                <div class="icon-play">
                    <a class="popup-video" href="<?php echo esc_url( $video_link_url ); ?>">
                    <svg class="svg-inline--fa fa-play fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path></svg>
                    </a>
                </div><!-- .icon-play -->
                
                <header class="entry-header">
                     <h1 class="entry-title"><?php echo esc_html($video_title); ?></h1>
                    <p class="section-subtitle"><?php echo esc_html($video_subtitle); ?></p>
                </header>
                
            </div><!-- .featured-image -->
        </div><!-- .video-wrapper -->


<?php 
/**
 * Template part for displaying Services Section
 *
 *@package Kontor
 */

    $team_title       = kontor_get_option( 'team_title' );
    $team_subtitle       = kontor_get_option( 'team_subtitle' );
    $team_content   = kontor_get_option( 'team_content_enable' );
    for( $i=1; $i<=4; $i++ ) :
        $team_post_posts[] = absint(kontor_get_option( 'team_post_'.$i ) );
        $team_position     = kontor_get_option( 'team_custom_position_'. $i );
    endfor;
    ?>
    <div class=" team-section relative">
       	<div class="wrapper">
            <?php if (!empty($team_title) || !empty($team_subtitle)) : ?>
                
                <div class="section-header">
                 <?php if(!empty($team_title)):?>
                    <h2 class="section-title"><?php echo esc_html($team_title); ?></h2>                                  
                    <div class="separator"></div>
                <?php endif; 
                if(!empty($team_subtitle)):?>
                    <p class="section-subtitle"><?php echo esc_html($team_subtitle); ?></p>
                <?php endif; ?>
                </div><!-- .section-header -->
            <?php endif;       
            ?>
                            
            <div class="section-content col-4">
                <?php 
                    $args = array (
                        'post_type'     => 'post',
                        'post_per_page' => count( $team_post_posts ),
                        'post__in'      => $team_post_posts,
                        'orderby'       =>'post__in', 
                        'ignore_sticky_posts' => true, 
                    ); 

                $loop = new WP_Query($args);                         
                if ( $loop->have_posts() ) :
                    $i=0;  
                    while ($loop->have_posts()) : $loop->the_post(); $i++;?>
                        <article class="hentry ">
                            <div class="post-wrapper">
                                <div class="team-image" style="background-image: url('<?php the_post_thumbnail_url('kontor-team'); ?>');">
                                    <a href="<?php the_permalink(); ?>" class="post-thumbnail-link" ></a>
                                </div><!-- .team-image -->
                                                
                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    </header>
                                    <div class="entry-content">
                                        <?php
                                            $excerpt = kontor_the_excerpt( 20 );
                                            echo wp_kses_post( wpautop( $excerpt ) );
                                        ?>
                                        <?php 
                                        $team_position     = kontor_get_option( 'team_custom_position_'. $i );
                                         if ( ! empty($team_position)) : ?>
                                            <h6 class="position"><?php echo esc_html( $team_position ); ?></h6>
                                        <?php endif; ?>
                                    </div>
                                </div><!-- .entry-container -->
                            </div><!-- .post-wrapper -->
                        </article>
                    <?php endwhile;?>
                <?php  endif; ?>
                <?php wp_reset_postdata(); ?>
            </div><!-- .section-content -->

        </div><!-- .wrapper -->
    </div><!-- #team-posts -->

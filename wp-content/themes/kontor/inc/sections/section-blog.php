<?php 
/**
 * Template part for displaying Blog Section
 *
 *@package Kontor
 */
?>
<?php 
    $blog_post_title    = kontor_get_option( 'blog_title' );
    $blog_post_subtitle    = kontor_get_option( 'blog_subtitle' );
    $blog_category = kontor_get_option( 'blog_category' );
?> 

    <?php if( !empty($blog_post_title) || ! empty($blog_post_sub_title ) ):?>
        <div class="section-header">
        <?php if( !empty($blog_post_title)):?>
            <h2 class="section-title"><?php echo esc_html($blog_post_title);?></h2>
        <?php endif;?>
            <?php if ( ! empty($blog_post_subtitle ) ) : ?>
            <p class="section-subtitle"><?php echo esc_html( $blog_post_subtitle ); ?></p>
        <?php endif; ?><!-- .section-header -->
        </div>
    
    <?php endif;?>
<div class="section-content clear col-3">
  	<?php $args = array (

    'posts_per_page' =>3,              
    'post_type' => 'post',
    'post_status' => 'publish',
    'paged' => 1,
    'ignore_sticky_posts' => true, 
    );
    if ( absint( $blog_category ) > 0 ) {
        $args['cat'] = absint( $blog_category );
    } 
    $loop = new WP_Query($args);                        
    if ( $loop->have_posts() ) :
        $i=0;  
        while ($loop->have_posts()) : $loop->the_post(); $i++;?>
		    <article>
		    	<div class="blog-item-wrapper">
			      	<?php if(has_post_thumbnail()):?>
				        <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
				        	<a class="post-thumbnail-link" href="<?php the_permalink();?>"></a>  
				        </div>
			    	<?php endif;?>

			    	<div class="entry-container">

				        <header class="entry-header">
							<h2 class="entry-title">
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h2>
				        </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = kontor_the_excerpt( 20 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->


                            <div class="entry-meta">                 
                                <?php kontor_entry_meta();?>
                            </div><!-- .entry-meta -->
				        <?php $readmore_text = kontor_get_option( 'readmore_text' );
                        if (!empty ($readmore_text)) { ?>
				          <a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($readmore_text);?></a>
                        <?php } ?>
			        </div><!-- .entry-container -->
			    </div><!-- .post-item -->
		    </article>
	    <?php endwhile;?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>
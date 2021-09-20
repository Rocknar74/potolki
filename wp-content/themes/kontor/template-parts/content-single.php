<?php 
 /*
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kontor
 */
?>
<?php 
$post_header_image_enable = kontor_get_option( 'post_header_image_enable'); 
$post_image_enable = kontor_get_option( 'post_image_enable');
$post_meta_enable = kontor_get_option( 'post_meta_enable');
$post_category_enable = kontor_get_option( 'post_category_enable'); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ($post_header_image_enable==false): ?>
		<header class="entry-header">
	        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	    </header>
	<?php endif ?>
	<div class="entry-meta">
		<?php
		 	kontor_posted_on();
		 	kontor_entry_meta();
		 ?>
	</div><!-- .entry-meta -->	
	<div class="entry-content">
		<?php 
		if (true == $post_image_enable ) { ?>

			<div class="featured-image">
		        <?php the_post_thumbnail( 'full', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
			</div><!-- .featured-post-image -->
		<?php } the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kontor' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php kontor_posts_tags(); ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'kontor' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>	
</article><!-- #post-## -->
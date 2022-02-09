<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roza
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php roza_post_thumbnail(); ?>
	<div class="post-content">
		<header class="entry-header">
			<?php
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta button">
					<?php roza_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
		</header><!-- .entry-header -->

	

		<div class="entry-content">
			<?php

			if(is_single( )){
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'roza' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
			}else{
				the_excerpt();
			}
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'roza' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php if ( 'post' === get_post_type() ) : roza_posted_by(); endif;roza_entry_footer(); 
			if(! is_single( )){
echo'<a href="'.esc_url ( get_the_permalink( $post->ID ) ).'" class="button">'.'<i class="fa fa-angle-right"></i>'.'</a>';}

			?> 
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

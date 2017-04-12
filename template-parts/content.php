<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BF_FUTURETASTIC
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bf_futuretastic_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

			$portraitImages = rwmb_meta( 'portrait_upload');
			if ( !empty( $portraitImages ) ) {
			    foreach ( $portraitImages as $portraitImage ) {
			        echo '<img style="padding:5px" src="', esc_url( $portraitImage['full_url'] ), '"  alt="', esc_attr( $portraitImage['alt'] ), '">';
			    }
			}
			// echo '<img style="padding:5px" src="', esc_url( $portraitImage['full_url'] ), '"  alt="', esc_attr( $portraitImage['alt'] ), '">';


			$images = rwmb_meta( 'image_upload'); // Since 4.8.0
			if ( !empty( $images ) ) {
			    foreach ( $images as $image ) {
			        echo '<a href="', esc_url( $image['full_url'] ), '" title="', esc_attr( $image['title'] ), '" rel="lightbox"><img style="padding:5px" src="', esc_url( $image['full_url'] ), '"  alt="', esc_attr( $image['alt'] ), '"></a>';
			    }
			}

			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bf_futuretastic' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bf_futuretastic' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bf_futuretastic_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

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
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bf_futuretastic_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

			$value = get_post_meta( get_the_ID(), 'color_pickers', true ); // Last param should be 'false' if field is multiple
		// print_r( $value );
			// $colorPicker = rwmb_meta( 'color_picker');
			echo "<script>console.log( 'Debug Object: ";
			print_r($value);
			echo "' );</script>";

			$portraitImages = rwmb_meta( 'portrait_upload');
			if ( !empty( $portraitImages ) ) {
				echo '<div class="portraitContainer"s>';
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title" style="color: '.$value.';"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

			    foreach ( $portraitImages as $portraitImage ) {

					$image_attachment_id = attachment_url_to_postid( $portraitImage['full_url'] );
				    $imagesrc = wp_get_attachment_image_src( $image_attachment_id, '');
				    $image_w = $imagesrc[1];
				    $image_h = $imagesrc[2];

				    if ($image_w > $image_h) {
				        echo '<p>landscape</p>';
				    } else {
				        echo '<p>portrait or square</p>';
				    }


			        echo '<img class="portrait" src="', esc_url( $portraitImage['full_url'] ), '"  alt="', esc_attr( $portraitImage['alt'] ), '"></div>';
			    }
			}
			echo '<div class="artist-content">';
			echo '<p class="artistbio">';
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bf_futuretastic' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			echo '</p>';
			echo '<div class="artistart">';
			$artImages = rwmb_meta( 'image_upload');
			if ( !empty( $artImages ) ) {
			    foreach ( $artImages as $artImage ) {
			        echo '<img class="art" src="', esc_url( $artImage['full_url'] ), '"  alt="', esc_attr( $artImage['alt'] ), '">';
			    }
			}
			echo '</div>';
			echo '</div>';

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

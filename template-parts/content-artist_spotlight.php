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
			the_title( '<h2 class="entry-title">test<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
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
			$portraitImageGroup = get_group('artist_portrait_image');
			// We can use the pr($elements) or print_r($elements) functions to see the contents of the array


			echo get('artist_link',1,1);
			// This would show something like this: http://magic.local/wp-content/files_mf/125780366410677912_gal.jpg


			?>

			<img src="<?php $portraitImageGroup[1]["o"]; ?>" alt="test">

			<?php
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

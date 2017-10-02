<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BF_FUTURETASTIC
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="zinesPoster"></div>
		<div class="zinesInfo">
			<p>What's a zine, you ask?</p>
			<p>The name comes from the latter half of the word maga(zine). Generally speaking, it's a low budget, hand-crafted, specialized booklet for a community, cause, or theme. What it looks like and how its made varies by the community that builds it.</p>
			<p>Our Loose Leaf zines are created from work submitted by students at UNR, are completely free to contribute to, are printed black-and-white, and are hand stitched and designed by Brushfire staff and volunteers. We start by taking a field trip somewhere and giving everyone a prompt or theme to create art to. In these trips everyone is free to roam and explore the area for inspiration. A few weeks after the field trip, we set up a workshop day to hand-stitch and assemble the physical zines. We provide all materials and directions. Everyone who helps gets their own copy, and we distribute the rest throughout Reno!</p>
			<p>For this semester, we're meeting at the entrance of the May Arboretum in San Rafael Park at 4 o'clock. If you'd like a ride, staff will be on the third floor of the Joe in the Brushfire office (room 331) at 3:30 to offer a ride there!</p>
			<p>Please note that while we will be bringing along some pens and pencils for use, it's better to come prepared with some type of material to get your work done on, whether it's a journal, sketchbook, or loose-leaf paper. You are also welcome to simply utilize your phone's note app and email me any written work at the end of the field trip. Also, if your creative medium is photography there will not be any cameras provided (so use your phone!). Last thing, the zine will be printed in black and white so if you plan on submitting a visual piece, just be aware of that.</p>
			<p>If you have any questions/concerns about the field trip feel free to <a href="mailto:percythefirst98@gmail.com">email our Zine Editor Percy</a>.</p>
			<p>Hope to see you at the field trip!</p>
		</div>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'bf_futuretastic' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->

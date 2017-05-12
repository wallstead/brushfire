<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BF_FUTURETASTIC
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p>© 2017 Brushfire Literature &amp; Arts · Published by the <a href="http://nevadaasun.com" target="_blank">Associated Students of the University of Nevada</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>

	$('.artistbio').flowtype({
		minimum   : 500,
		minFont   : 12,
		maxFont   : 19,
		fontRatio : 30
	});

	$(document).ready(function(){
		$('.artistart').imagesLoaded( function() {
			$('.artistart').isotope({
				itemSelector: '.art',
				layoutMode: 'fitRows',
				percentPosition: true
			});
		});
	});
</script>

</body>
</html>

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
	/* fittext */
	// (function($) {
	//     $.fn.fitText = function(kompressor, options) {
	//         // Setup options
	//         var compressor = kompressor || 1,
	//             settings = $.extend({
	//                 'minFontSize': Number.NEGATIVE_INFINITY,
	//                 'maxFontSize': Number.POSITIVE_INFINITY
	//             }, options);
	//         return this.each(function() {
	//             // Store the object
	//             var $this = $(this);
	//             // Resizer() resizes items based on the object width divided by the compressor * 10
	//             var resizer = function() {
	//                 $this.css('font-size', Math.max(Math.min($this.width() / (compressor * 10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
	//             };
	//             // Call once to set.
	//             resizer();
	//             // Call on resize. Opera debounces their resize by default.
	//             $(window).on('resize.fittext orientationchange.fittext', resizer);
	//         });
	//     };
	// })(jQuery);

	$(document).ready(function(){
		$('.artistart').imagesLoaded( function() {
			$('.artistart').isotope({
				itemSelector: '.art',
				layoutMode: 'fitRows',
				percentPosition: true
			});
		});

		// $(".artist-name").fitText();
	});
</script>

</body>
</html>

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

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

          </div>

        </div>

	</div>


<script>

	$('.artistbio').flowtype({
		minimum   : 500,
		minFont   : 12,
		maxFont   : 19,
		fontRatio : 30
	});

	// $(document).ready(function(){
	// 	$('.artistart').imagesLoaded( function() {
	// 		$('.artistart').isotope({
	// 			itemSelector: '.art',
	// 			layoutMode: 'fitRows',
	// 			percentPosition: true
	// 		});
	// 	});
	// });

	$(document).ready(function(){
		$('.artistart').imagesLoaded( function() {
			$('.artistart').isotope({
				itemSelector: '.art',
				percentPosition: true,
				masonry: {
					columnWidth: '.portrait-orientation'
				}
			});
		});
		// var artistArtArray = $(".artistart").toArray();
		// for (i = 0; i < 2; i++) {
		// 	var thisArtistArt = artistArtArray[i];
		// 	$(thisArtistArt).imagesLoaded( function() {
		// 		$(thisArtistArt).isotope({
		// 			itemSelector: '.art',
		// 			percentPosition: true,
		// 			masonry: {
		// 				columnWidth: '.art'
		// 			}
		// 		});
		// 	});
		// }
		// $(".artistart").toArray()
		// .each(function( index ) {
		// 	$(this).imagesLoaded( function() {
		// 		$(this).isotope({
		// 			itemSelector: '.art',
		// 			percentPosition: true,
		// 			masonry: {
		// 				columnWidth: '.art'
		// 			}
		// 		});
		// 	});
		// });
	});


</script>

</body>
</html>

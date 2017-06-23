$(document).ready(function(){
	var navOpen = false;

    $("#navburger").click(function(){
		if (navOpen) {
			/* close nav */
			$(this).removeClass("is-active");
			navOpen = false;
		} else {
			/* open nav */
			$(this).addClass("is-active");
			navOpen = true;
		}
		$(".navlinks").slideToggle(1000, 'swing');
		
    });
});

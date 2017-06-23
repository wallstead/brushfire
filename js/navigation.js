$(document).ready(function(){
	var navOpen = false;

    $("#navburger").click(function(){

		if (navOpen) {
			/* close nav */
			$(this).removeClass("is-active");
			$(".navlinks").css('height', '0');
			navOpen = false;
		} else {
			/* open nav */
			$(this).addClass("is-active");
			$(".navlinks").css('height', 'auto');
			navOpen = true;
		}

    });
});

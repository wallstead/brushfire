$(document).ready(function(){
    $("#navburger").click(function(){
        $(this).toggleClass("is-active");
		$(".navlinks").css('height', 'auto');
    });
});

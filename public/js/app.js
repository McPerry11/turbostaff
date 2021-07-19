$(function() {
	$(window).scroll(function() {
		$(this).scrollTop() > 200 ? $('#arrow').fadeOut() : $('#arrow').fadeIn();
	});
});
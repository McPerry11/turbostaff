$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
	}
});

$(function() {
	$(window).scroll(function() {
		$(this).scrollTop() > 200 ? $('#arrow').fadeOut() : $('#arrow').fadeIn();
	});

	$('button[type="submit"').click(function() {
	});
});
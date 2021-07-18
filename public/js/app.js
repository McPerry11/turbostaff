$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
	}
});

$(function() {
	$(window).scroll(function() {
		$(this).scrollTop() > 200 ? $('#arrow').fadeOut() : $('#arrow').fadeIn();
	});

	$('.btn-close').click(function() {
		$(this).parent().slideUp();
	});

	$('form').submit(function(e) {
		e.preventDefault();
		$('.alert-danger').slideDown();
	});
});
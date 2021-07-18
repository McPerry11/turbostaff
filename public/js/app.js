$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
	}
});

$(function() {
	var enableForm = () => {
		$('form').find('input').removeAttr('readonly');
		$('form').find('textarea').removeAttr('readonly');
		$('form').find('button[type="submit"]').removeAttr('disabled');
		$(this).find('button[type="submit"]').text('SUBMIT');
	}

	$(window).scroll(function() {
		$(this).scrollTop() > 200 ? $('#arrow').fadeOut() : $('#arrow').fadeIn();
	});

	$('.btn-close').click(function() {
		$(this).parent().slideUp();
	});

	$('form').submit(function(e) {
		e.preventDefault();
		$(this).find('button[type="submit"]').html(`<i class="fas fa-spinner fa-spin"></i>`).attr('disabled', true);
		$(this).find('input').attr('readonly', true);
		$(this).find('textarea').attr('readonly', true);
		let data = $(this).serializeArray();
		$.ajax({
			type: 'POST',
			url: 'mail',
			data: data,
			datatype: 'JSON',
			success: function(response) {
				if (response.status == 'success') {
					$('.alert-success').slideDown();
					$('form').find('input').val('');
					$('form').find('textarea').val('');
				} else {
					console.log(response);
					$('.alert-danger').slideDown();
				}
				enableForm();
			}, 
			error: function(err) {
				console.log(err);
				$('.alert-danger').slideDown();
				enableForm();
			}
		});
	});
});
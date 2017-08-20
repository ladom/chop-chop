'use strict';

$(function () {

	$('a[href^="#"]').on('click', function (event) {

		var target = $($(this).attr('href'));

		if (target.length) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});
});
$(function () {
	$(".content__link").click(function () {
		if ($(this).next().hasClass('closed')) {
			$(this).next().removeClass('closed').addClass('opened');
			$(this).text('\u2014 read less');
		} else {
			$(this).next().removeClass('opened').addClass('closed');
			$(this).text('\u2014 read more');
		}
	});
});
$('.hero__button').click(function () {

	var text = document.getElementsByClassName('ipsum');
	for (var i = 0; i < text.length; i++) {
		var word = text[i].innerHTML;
		word = word.replace('ipsum', '<span class="red">ipsum</span>');
		text[i].innerHTML = word;
	}
	setTimeout(function () {
		var text = document.getElementsByClassName('ipsum');
		for (var i = 0; i < text.length; i++) {
			var word = text[i].innerHTML;
			word = word.replace('<span class="red">ipsum</span>', 'ipsum');
			text[i].innerHTML = word;
		}
	}, 3000);
});
$('.form__submit--button').click(function (event) {

	console.log('submited');
	var ajaxRequest;
	event.preventDefault();

	var values = $('.form').serialize();

	ajaxRequest = $.ajax({
		url: "post.php",
		type: "post",
		data: values
	});

	ajaxRequest.done(function (data) {
		$('.form').html(data);
	});
});
$('.form__submit--button').click(function(event) {

	console.log('submited');
	var ajaxRequest;
	event.preventDefault();

	var values = $('.form').serialize();

	ajaxRequest= $.ajax({
	url: "post.php",
	type: "post",
	data: values
	});

	ajaxRequest.done(function (data){
	$('.form').html(data);
	});

});
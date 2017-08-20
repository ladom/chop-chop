$(function() {
	$(".content__link").click(function(){
		if($(this).next().hasClass('closed')){
			$(this).next().removeClass('closed').addClass('opened');
			$(this).text('\u2014 read less');
		} else {
			$(this).next().removeClass('opened').addClass('closed');
			$(this).text('\u2014 read more');
		}
	});
});		
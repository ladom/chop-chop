$('.hero__button').click( function () {
		
	var text = document.getElementsByClassName('ipsum');
		for(var i = 0; i < text.length; i++) {
			var word = text[i].innerHTML;
			word = word.replace('ipsum', '<span class="red">ipsum</span>');
			text[i].innerHTML = word;
		}
		setTimeout(function(){
			var text = document.getElementsByClassName('ipsum');
				for(var i = 0; i < text.length; i++) {
					var word = text[i].innerHTML;
					word = word.replace('<span class="red">ipsum</span>', 'ipsum');
					text[i].innerHTML = word;
				}
		}, 3000);
});
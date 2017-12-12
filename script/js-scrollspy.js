$(function(){
	//Mouvement fluide et scrollspy
	$('#a_actualites').on('click', function(e) {
		e.preventDefault();

		if(this.hash !== "")
		{
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(this.hash).offset().top - 49
			}, 1000);
		}
	});

	$('li>a').on('click', function(e) {
		e.preventDefault();

		if(this.hash !== "")
		{
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(this.hash).offset().top - 49
			}, 1000);
		}
	});
})

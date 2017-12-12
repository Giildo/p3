$(function(){
	//Nav qui disparait
	if(document.body.clientWidth >= 991) {
		$(document).scroll(function(){
			var top = document.documentElement.scrollTop;

			if (top == 0) {
				$('.navbar-inverse').attr('style', 'background:rgba(0,0,0,0);border-color:rgba(0,0,0,0);');
			} else {
				$('.navbar-inverse').removeAttr('style');
			}
		});
	} else {
		$('.navbar-inverse').removeAttr('style');
	}

	$('#a_top').click(function(e){
		e.preventDefault();

		$('html').animate({
			scrollTop: '0'
		}, 1000);
	});
})

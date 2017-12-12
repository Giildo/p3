$(function(){
	//Mouvement des photos
	var i = 1;
	var interval = 1;
	var chemins = new Array();

	for (var j = 0; j < 12; j++) {
		chemins[j] = 'images/' + $('#img' + (j + 1)).data('film');
	}

	setInterval(function(){
		if(interval == 2) {
			if(i >= 6)
			{
				i = 1;
			} else {
				i++;
			}
		}

		if(interval == 1) {
			for (var j = 0; j < 12; j = j+2) {
				$('#img' + (j + 1)).attr('src', chemins[j] + '/' + i + '.jpg');
			}
			interval = 2;
		} else {
			for (var j = 1; j < 12; j = j+2) {
				$('#img' + (j + 1)).attr('src', chemins[j] + '/' + i + '.jpg');
			}
			interval = 1;
		}
	}, 1500);
})

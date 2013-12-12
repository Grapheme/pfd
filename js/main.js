var $fotoramaDiv = $('.fotorama').fotorama();
var fotorama = $fotoramaDiv.data('fotorama');

function cssFade(elem, act) {
	if(act=='show') {
		$(elem).css({'opacity': 1, 'max-height': 1500});
	}
	if(act=='hide') {
		$(elem).css({'opacity': 0, 'max-height': 0});
	}
}

$('.left-arrow').click(function(){
	fotorama.show('<');
});

$('.right-arrow').click(function(){
	fotorama.show('>');
});

$('.js-open-sign').click(function(e){
	e.stopPropagation();
	cssFade('.sign-up-open','show');
});

$('.js-close-sign').click(function(e){
	e.stopPropagation();
	cssFade('.sign-up-open','hide');
});

$('.sign-up-open').click(function(e){
	e.stopPropagation();
});

$(document).click(function(){
	cssFade('.sign-up-open','hide');
});



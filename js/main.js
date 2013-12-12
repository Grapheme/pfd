var $fotoramaDiv = $('.fotorama').fotorama();
var fotorama = $fotoramaDiv.data('fotorama');

$('.left-arrow').click(function(){
	fotorama.show('<');
});

$('.right-arrow').click(function(){
	fotorama.show('>');
});




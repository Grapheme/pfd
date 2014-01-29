$(function(){
	scrollPosStart();
});

$(window).scroll(function(){
	scrollPosStart();
});

var ipadPos = parseInt($('.ipad').css('top'));

function iphoneAnimate() {
	$('.iphone').css({ 'left': 970 });
    setTimeout(function(){
    	$('.iphone').css('z-index', 3);
    	$('.iphone').css({ 'left': 840, 'top': 350 });
    }, 500);
}

function ipadAnimate() {
	$('.ipad').css({ 'left': 0 });
}

function animateStart() {
	iphoneAnimate();
	ipadAnimate();
}

function scrollPosStart() {
		var position = $('.devices-content').position();
		if($(window).scrollTop() > position.top - $('.devices-content').height()/2 ) {
			animateStart();
		}
}
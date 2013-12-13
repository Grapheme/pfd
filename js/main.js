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

function csSlide(elem, act, max) {
	if(act=='show') {
		$(elem).css({'max-height': max});
	}
	if(act=='hide') {
		$(elem).css({'max-height': 0});
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

var $lang_open = false;
$('.lang-ul').click(function(e){
	e.stopPropagation();
	if(!$lang_open) {
		csSlide('.option-lang','show',40);
		$('.lang-triangle').addClass('lang-triangle-active');
		$lang_open = true;	
	} else {
		csSlide('.option-lang','hide',40);
		$('.lang-triangle').removeClass('lang-triangle-active');
		$lang_open = false;
	}
});

$('.lang-item').click(function(){
	var langB = $(this).html();
	var langA = $('.active-lang').html();
	$(this).html(langA);
	$('.active-lang').html(langB);
});

$(document).click(function(){
	cssFade('.sign-up-open','hide');
	
	csSlide('.option-lang','hide',40);
	$('.lang-triangle').removeClass('lang-triangle-active');
	$lang_open = false;
});

/*====================================
 * PlaceHolder FIX
 * =================================== */

function hasPlaceholderSupport() {
  var input = document.createElement('input');
  return ('placeholder' in input);
}
  
if (!hasPlaceholderSupport()) {
        $('[placeholder]').focus(function() {
          var input = $(this);
          if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
          }
        }).blur(function() {
          var input = $(this);
          if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
          }
        }).blur();
}

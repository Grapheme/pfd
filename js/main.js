$('.header-nav a[href=#]').click(function(){
	return false;
});

var $fotoramaDiv = $('.fotorama').fotorama();
var fotorama = $fotoramaDiv.data('fotorama');
var timer;

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

/*
 * Hover effects on hover table
 */
$('.color-table tr:nth-child(even)').hover(
	function() {
		if($('.opened_td')[0]) {
			$('.opened_td').removeClass('opened_td').css('padding', '0 5px').find('p').css('height', '0');
		}
		$(this).next().find('.open_td').addClass('opened_td').css('padding', '5px 5px').find('p').css('height', 'auto');
	},
	function() {
		var that = $(this);
		timer = window.setTimeout(function(){
			that.next().find('.open_td').removeClass('opened_td').css('padding', '0 5px').find('p').css('height', '0');
		}, 1000);						
	}
);
$('.color-table tr:nth-child(odd)').hover(
	function() {
		window.clearTimeout(timer);
	},
	function() {
		var that = $(this);
		timer = window.setTimeout(function(){
			that.find('.open_td').css('padding', '0 5px').find('p').css('height', '0');
		}, 1000);
	}
);

$(document).click(function(){
	cssFade('.sign-up-open','hide');
	
	csSlide('.option-lang','hide',40);
	$('.lang-triangle').removeClass('lang-triangle-active');
	$lang_open = false;
	
	$('.search-input').css({'width': 0});
	setTimeout(function(){
		$('.search-open').css({'text-indent': -9999});
	}, 200);
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



/*
 * DISABLE DRAG IMAGES
 */

$(document).on("dragstart", function() {
     return false;
});



/*
 * Search dynamics
 */

$('.search-img').click(function(e){
	e.stopPropagation();
	$('.search-open').css({'text-indent': 0});
	$('.search-input').css({'width': 180});
});

$('.search-input').click(function(e){
	e.stopPropagation();
});
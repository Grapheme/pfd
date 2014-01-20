$(function(){
	$('.lang-div').not($('.lang-div').first()).hide();
});

$('.lang-change').click(function(){
	var $cl = $(this).attr('data-lang');
	$('.lang-div:visible').fadeOut('fast', function(){
		$('.lang-div[data-lang=' + $cl + ']').fadeIn('fast');
	});
});
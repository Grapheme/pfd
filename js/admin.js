$(function(){
	$('.lang-div').not($('.lang-div').first()).hide();
	//$("textarea").markItUp(mySettings);
});

$('.lang-change').click(function(){
	$('.lang-change.active').removeClass('active');
	$(this).addClass('active');
	var $cl = $(this).attr('data-lang');
	$('.lang-div:visible').fadeOut('fast', function(){
		$('.lang-div[data-lang=' + $cl + ']').fadeIn('fast');
	});
	return false;
});
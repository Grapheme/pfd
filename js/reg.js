function regStart() {
	var $toCat = window.location.hash;
	$toCat = $toCat.replace('#','');
	$('.account-choose-a[data-type=' + $toCat + ']').addClass('active');
	$('.account-div[data-type=' + $toCat + ']').fadeIn();
	if($toCat == '') {
		$('.account-choose-a[data-type=paper]').addClass('active');
		$('.account-div[data-type=paper]').show();
	}
}

$('.account-choose-a').click(function(){
	var $account_click = $(this).data('type');
	var $account_active = $('.active').data('type');
	if($account_click != 'online') {
		if($account_click != $account_active) {
		
			$('.active').removeClass('active');
			$(this).addClass('active');
			$('.account-div[data-type=' + $account_active + ']').fadeOut('fast', function(){
				$('.account-div[data-type=' + $account_click + ']').fadeIn('fast');
			});
			window.location.hash = $account_click;
		}
		return false;
	}
});

regStart();
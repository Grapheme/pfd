function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$('input').focus(function(){
	$(this).parent().removeClass('error-input');
});

$('textarea').focus(function(){
	$(this).parent().removeClass('error-input');
});

$('.contact-send').click(function(){
	var $form = $(this).parent();
	var $button = $(this);
	var errors = 3;
	$form.find('input#name').each(function(){
		if($(this).val().length < 2) {
			$(this).parent().addClass('error-input');
		} else {
			$(this).parent().removeClass('error-input');
			errors--;
		}
	});
	$form.find('input#email').each(function(){
		if(!validateEmail($(this).val())) {
			$(this).parent().addClass('error-input');
		} else {
			$(this).parent().removeClass('error-input');
			errors--;
		}
	});
	$form.find('textarea').each(function(){
		if($(this).val().length < 2) {
			$(this).parent().addClass('error-input');
		} else {
			$(this).parent().removeClass('error-input');
			errors--;
		}
	});
	if(errors == 0) {
		$button.fadeOut();
		$.post( "contact_send", { name: $('#name').val(), email: $('#email').val(), text: $('#message').val() })
		  .done(function( data ) {
		    $form.fadeOut(function(){
				$('.contact-sent').fadeIn();
			});
		  });
		
	}
	return false;
});

$('.contact-send').click(function(){
	var $form = $(this).parent();
	var $button = $(this);
	var errors = 3;
	$form.find('input').each(function(){
		if($(this).val().length < 4) {
			$(this).parent().css('border-color','red');
		} else {
			$(this).parent().css('border-color','#c4c7c9');
			errors--;
		}
	});
	$form.find('textarea').each(function(){
		if($(this).val().length < 4) {
			$(this).parent().css('border-color','red');
		} else {
			$(this).parent().css('border-color','#c4c7c9');
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

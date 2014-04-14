
$('.bank-details-title').click(function(){
	$(this).parent().find('.bank-details-desc').slideToggle();
});

$('.bank-details-desc').first().show();

/*
 * OLD CODE
 */

function validateForm(form)
	{	
	
		$('input[id=ClientFirstName]').val($('input[id=firstname]').val());
		$('input[id=ClientLastName]').val($('input[id=lastname]').val());
		$('input[id=ClientEmail]').val($('input[id=pay_from_email]').val());
		$('input[id=CustomField1]').val($('input[id=detail1_text]').val());
	
	    if (form.detail1_text.value == "") {
          form.detail1_text.focus();	
          alert( "Please enter your Account." ); 
          return false; 
        }
        if (form.firstname.value == "") {
          form.firstname.focus();
          alert( "Please enter your First Name." );
          return false;           
        }
        if (form.lastname.value == "") {
          form.lastname.focus();
          alert( "Please enter your Last Name." );
          return false;           
        }
        if (form.pay_from_email.value == "") {
          form.pay_from_email.focus();
          alert( "Please enter your Email address." );
          return false;           
        }
        if (form.amount.value == "") {
          form.amount.focus();
          alert( "Please enter your Deposit Amount." );
          return false;           
        }
	    return true;		
	}
	
	var save_action_url='';
	function SetCUPAction()
	{
		var _selected = $("#payment_methods").val();
		if (_selected=='CUP')
		{
			save_action_url=$("#money_bookers_form").attr("action");
			$("#money_bookers_form").attr("action", "https://www.astechprocessing.net/ASTECH/Payments/ASTECHPayments.aspx");
			SetCUPCurrency('CNY');
		}else
		{
			if (save_action_url!='')
				$("#money_bookers_form").attr("action", save_action_url);
				SetCUPCurrency('USD');
		}
	}

	function SetCUPCurrency(add_cur)
	{
		$("#cup_currency option[value='USD']").remove();
		$("#cup_currency option[value='CNY']").remove();
		$("#cup_currency").append($('<option></option>').val(add_cur).html(add_cur));
	}
	
	
window.onload = function(){
	var transactionID = new Date().getTime();
	document.getElementById('merch_transid').value = transactionID;	
}
$(function(){
	$( "#neteller_form" ).on( "submit", function( event ) {
		event.preventDefault();
		$('<p>The request is proccessed. Please be patient.</p>').insertAfter('#neteller__btn');
		var params = $(this).serialize();
		console.log('request: ' + params);
		$.post('/neteller?'+params, function(data){
			if ( $(data).find('approval').text() == 'yes' ) {
				window.location.href = 'http://www.pfd-nz.com/thanks';
			} else {
				window.location.href = 'http://www.pfd-nz.com/thanks?neteller=error&msg='+$(data).find('error_message').text();
			}
			//console.log('responce: ' + data);
		});
		
		// refresh transaction ID
		var transactionID = new Date().getTime();
		document.getElementById('merch_transid').value = transactionID;
	});
});
			
			
$('#libertyreserve_form').submit(function() {
        var amount = $('#lr_amnt').val(); 
        if (amount === undefined || amount === "") {
          $('#lr_amnt').attr('name', 'empty_lr_amnt');
        } else {
          $('#lr_amnt').attr('name', 'lr_amnt');        
        }
        
        var account_from = $('#lr_acc_from').val(); 
        if (account_from === undefined || account_from === "") {
          $('#lr_acc_from').attr('name', 'empty_lr_acc_from');
        } else {
          $('#lr_acc_from').attr('name', 'lr_acc_from');        
        }
    });
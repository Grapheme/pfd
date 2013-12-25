@extends('layouts/main')

@section('wrapper')
	wrapper
@stop

@section('content')

@section('scripts')
	<script src="<?=URL::to('js/deposit.js');?>"></script>
@stop	
	
			<section class="normal">
	        	<div class="static">
		        	<div class="static-title">
		        		<div class="f_header">Deposit Options</div>
		        	</div>
		        	<div class="static-block static-block-full">
		        		<div class="static-block-in">
		        			<div class="desc">
		        				<p>
		        					<span class="static-block-title">How to fund your account</span>
		        				</p>
		        				<p>
		        					There are several easy ways to fund or top up your trading accounts.
		        				</p>
		        				<p>
		        					Please note payment solution providers levy service charges/fees as generally applicable to the respective services. These charges/fees are deducted from the proceeds.
		        				</p>
		        				<p>
		        					Please make sure any payment you make to us is made from a card/account that is in your own name and not in a third partyӳ name. Remittances from third party sources may be returned. If you're thinking of doing this, please contact us before doing so. 
		        				</p>
		        				<p>
		        					* While using Webmoney, the user acknowledges risks associated with <a class="our-link" href="http://www.wmtransfer.com/eng/cooperation/legal/syagreement1.shtml#3" target="_blank">Agreement on Property Rights Transfer by Means Of Digital Units,<br> Annex III</a>.
		        				</p>
		        				<p>
		        					Online funding using credit/debit card/Money Bookers (Skrill)/China Union Pay
		        				</p>
		        			</div>
		        			<div class="deposit-box">
            
                <div style="margin: 0px;">
                <img style="vertical-align:middle" alt="moneybroker" src="img/moneybookers_cup_checkout.gif">
                <span style="padding-left: 50px; font-family:Myriad, Verdana, Arial;font-size:12px;font-weight:normal;line-height: 24px;" align="right">* Required fields</span>
                </div>
            
            
                <form onsubmit="return validateForm(this);" target="_parent" method="post" action="https://www.moneybookers.com/app/payment.pl" name="money_bookers_form" id="money_bookers_form">
        <table style="margin:0" class="contact-table">
            <tbody>
                <tr style="display:none;">
                  <td></td>
                  <td>
					<input type="hidden" value="admin@pfd-nz.com" name="pay_to_email">
					<input type="hidden" value="PACI000328" name="MerchantID">
					<input type="hidden" value="T1042T_PADEASrm1" name="BrandID">
					<input type="hidden" value="PFD Services" name="ServiceName">
					<input type="hidden" value="333" id="ClientFirstName" name="ClientFirstName">
					<input type="hidden" value="43333" id="ClientLastName" name="ClientLastName">
					<input type="hidden" value="CN" name="ClientCountry">
					<input type="hidden" value="wweee" id="ClientEmail" name="ClientEmail">
					<input type="hidden" value="5555545654" name="ClientPhone">
					<input type="hidden" value="address" name="ClientAddress">
					<input type="hidden" value="city" name="ClientCity">
					<input type="hidden" value="12345" name="ClientZip">
					<input type="hidden" value="XX" name="ClientState">
					<input type="hidden" value="PACI000328-01" name="StoreID">
					<input type="hidden" value="CREDIT" name="ProductType">
					<input type="hidden" value="0" name="RequestType">
					<input type="hidden" value="1" name="GUIType">
					<input type="hidden" value="cup" name="ClientCardType">
					<input type="hidden" value="4111111111111111" name="ClientCardNumber">
					<input type="hidden" value="01" name="ClientCardExpirationMonth">
					<input type="hidden" value="2020" name="ClientCardExpirationYear">
					<input type="hidden" value="123" name="ClientCardCVV">
					<input type="hidden" value="name" name="ClientNameOnCard">
					<input type="hidden" value="333" id="CustomField1" name="CustomField1">
				  </td>
                </tr>

                <tr>

                  <td></td>
                  <td><input type="hidden" value="admin@pfd-nz.com" name="status_url"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="hidden" value="PFD" name="recipient_description"></td>
                </tr>

                <tr>

                  <td valign="top" align="right" class="padded">Payment method:</td>
                  <td>
                    <select onchange="SetCUPAction()" style=" width:260px" class="deposit-text" name="payment_methods" id="payment_methods">
                      <option value="WLT">Moneybookers E-Wallet</option>
                      <option value="ACC">Credit / Debit Cards</option>
					  <option value="CUP">China Union Pay</option>
                    </select>                  </td>
                </tr>

                <tr>
                    <td align="right" class="padded">PFD Account Number *:</td>
                    <td>
                      <input class="deposit-text" value="" id="detail1_text" name="detail1_text">
                      <input type="hidden" value="PFD Account Number" name="detail1_description"></td>
              </tr>

                <tr>
                <td align="right" class="padded">First Name *:</td>
                  <td><input class="deposit-text" value="" id="firstname" name="firstname"></td>
                </tr>

                <tr>
                    <td align="right" class="padded">Last Name *:</td>
                    <td><input class="deposit-text" value="" id="lastname" name="lastname"></td>
                </tr>

                <tr>

                  <td align="right" class="padded">Email Address *:</td>
                  <td><input class="deposit-text" value="" id="pay_from_email" name="pay_from_email"></td>
                </tr>

                <tr>
                  <td align="right" class="padded">Mobile Phone Number:</td>
                  <td><input class="deposit-text" value="" name="phone_number"></td>
                </tr>

                <tr>
                  <td align="right" class="padded">Deposit Amount *:</td>
                  <td>
                      <table cellpadding="0" border="0">
                      <tbody><tr>
                        <td><input class="deposit-text" value="" name="amount"></td>
                        <td>
                        	<select style="width:55px;" class="deposit-text" id="cup_currency" name="currency">
                                  <option value="USD">USD </option>
                            </select>
                        </td>
                      </tr>
                    </tbody></table>
                 </td>
               </tr>

                <tr>
                  <td></td>
                  <td><input type="hidden" value="Thank you very much for funding your account." name="confirmation_note"></td>
                </tr>

                <tr>

                  <td></td>
                  <td><input type="hidden" value="1" name="hide_login"></td>
                </tr>

                <tr>
                  <td align="right"></td>
                  <td><input type="submit" class="deposit-btn drop" value="Deposit Funds"></td>
                </tr>
            </tbody>
        </table>
    </form>
    </div>
    
    
    
    <div class="deposit-box">
        <div style="margin: 0px; margin-bottom:4px; margin-right: 0.75em; float: left;" class="left">
            <img src="img/webmoney__logo.png" alt="Webmoney" border="0">
        </div>
        <div style="float: right;">
			<a href="http://www.megastock.com" target="_blank"><img src="http://megastock.webmoney.ru/doc/Logo/acc_blue_on_transp_en.png" alt="www.megastock.com" border="0"></a>
		</div>
	    <div style="float: right;">
			<a href="https://passport.webmoney.ru/asp/certview.asp?wmid=108044683718 " target="_blank"><img src="http://megastock.webmoney.ru/doc/Logo/v_blue_on_transp_en.png" alt="Here you can find information as to the passport for our WM-identifier 108044683718" border="0"></a>
		</div>
		<div style="clear:both;"> </div>

	     <div class="cont">
		  	<form method="post" action="https://merchant.wmtransfer.com/lmi/payment.asp?at=authtype_8">
			    <table class="contact-table" style="margin:0">
		            <tbody>
		                <tr style="display:none;">
		                  <td></td>
		                  <td>
							<input type="hidden" name="lmi_payment_desc" value="Payment description">
							<input type="hidden" name="lmi_payment_no" value="Order number">
							<input type="hidden" name="lmi_sim_mode" value="1">
						  </td>
		                </tr>
						
						<tr>
		                    <td class="padded" align="right">Account # *:</td>
		                    <td>
		                      <input name="detail1_text" id="detail1_text" value="" class="deposit-text">
		                      <input type="hidden" name="detail1_description" value="PFD Account Number"></td>
		              </tr>
		                <tr>
		                  <td class="padded" align="right">Deposit Amount *:</td>
		                  <td>
		                      <table border="0" cellpadding="0">
		                      <tbody><tr>
		                        <td><input name="lmi_payment_amount" style="width: 160px" value="" class="deposit-text"></td>
		                        <td>
		                        	<select name="lmi_payee_purse" id="lmi_payee_purse" class="deposit-text" style="width:150px;">
		                                  <option value="Z245162139709">WebMoney USD (WMZ)</option>
		                            </select>
		                        </td>
		                      </tr>
		                    </tbody></table>
		                 </td>
		               </tr>
		
		                <tr>
		                  <td align="right"></td>
		                  <td><input type="submit" value="Deposit Funds" class="deposit-btn drop"></td>
		                </tr>
		            </tbody>
		        </table>
		  	</form>
		</div>
    </div>
    
    	<div class="deposit-box">
        <div style="margin: 0px; margin-bottom:4px;">
            <img src="img/neteller.jpg" alt="Technocash" border="0">
        </div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
			window.onload = function(){
				var transactionID = new Date().getTime();
				document.getElementById('merch_transid').value = transactionID;	
			}
			$(function(){
				$( "#neteller_form" ).on( "submit", function( event ) {
					event.preventDefault();
					$('<p>The request is proccessed. Please be patient.</p>').insertAfter('#neteller__btn');
					var params = $(this).serialize();
					$.post('/proxy.php?'+params, function(data){
						if ( $(data).find('approval').text() == 'yes' ) {
							window.location.replace('/payment-thankyou.php');
						} else {
							window.location.replace('/payment-thankyou.php?neteller=error&msg='+$(data).find('error_message').text());
						}
					})
					
					// refresh transaction ID
					var transactionID = new Date().getTime();
					document.getElementById('merch_transid').value = transactionID;
				});
			});
		</script>
				
		<form id="neteller_form" name="neteller_form" method="post" action="https://api.neteller.com/netdirect">
	          <!--
			  <input type="hidden" name="language_code" value="Client Language">
			  <input type="hidden" name="merch_account" value="john123" maxlength="50">
			  -->
			  
			  <table class="contact-table" style="margin:0">
					<tbody>
						<tr>
						  <td class="padded" align="right" valign="top">Deposit Amount *:</td>
						  <td>
							<input type="text" name="amount" size="10" maxlength="10">
							<input type="hidden" name="version" value="4.1">
							<input type="hidden" name="merchant_id" value="20858">
			  				<input type="hidden" name="merch_key" value="594847">
			  				<input type="hidden" name="merch_transid" id="merch_transid" value="1387918382596" maxlength="50">
			  				<input type="hidden" name="merch_name" value="PFD-NZ">  
						  </td>
						</tr>
						
						<tr>
						  <td class="padded" align="right" valign="top">Currency:</td>
						  <td>
							<select name="currency" class="deposit-text" style="width: 95px;">
								  <option value="USD">USD</option>
								  <option value="EUR">EUR</option>
								  <option value="GBP">GBP</option>
								  <option value="JPY">JPY</option>
							</select>
						  </td>
						</tr>
						
						<tr>
							<td class="padded" align="right">PFD Account Number *:</td>
							<td>
							  <input type="text" id="detail1_text" name="custom_1" value="" maxlength="50" class="deposit-text">
							</td>
						</tr>
						
						<tr>
						  <td class="padded" align="right" valign="top">Neteller Account ID *:</td>
						  <td>
							<input type="text" name="net_account" size="20" maxlength="100">
						  </td>
						</tr>
						
						<tr>
						  <td class="padded" align="right" valign="top">Secure ID *:</td>
						  <td>
							<input type="text" name="secure_id" size="10" maxlength="6">
						  </td>
						</tr>
						
						<tr>
						  <td align="right"></td>
						  <td><input type="submit" id="neteller__btn" name="button" value="Deposit Funds" class="deposit-btn drop"></td>
						</tr>

					</tbody>
				</table>			  
			  
			  
	    </form>
    </div>
    					<div class="desc">
    						<p>
	        					<span class="static-block-title">Online funding using bank transfer</span>
	        				</p>
	        				<p>
	        					Please quote your full name and your PFD account number as reference and make your deposit to one of our account numbers (below) according to the currency you're depositing.
	        				</p>
    					</div>
    					<div class="f_header">Bank details for wiring</div>
    					<div class="bank-details">
    						<div class="bank-details-title"><span class="static-block-title">USD Banking Instructions</span></div>
    						<div class="bank-details-desc">
								<p>1) Pay to: Bank of New Zealand., 80, Queen Street, Auckland, New Zealand., Bank & Branch no. 020100. Swift ֠BKNZNZ22</p>
								<p>Beneficiary : Pacific Financial Derivatives Ltd - Client Bank Account</p>
								<p>Beneficiary Account : USD 680991-0002</p>
								<p>Payment Reference : Your account number with PFD</p>
								<p>&nbsp;</p>
								<p>2) Pay to : ANZ Bank Limited, New Zealand., Swift ֠ANZBNZ22</p>
								<p>Beneficiary Name : PFD LTD ֠Client Bank Account</p>
								<p>Account Number : PFDLTDUSD00</p>
								<p>Payment Reference : Your account number with PFD</p>
    						</div>
    					</div>
    					
    					<div class="bank-details">
    						<div class="bank-details-title"><span class="static-block-title">NZD Banking Instructions</span></div>
    						<div class="bank-details-desc">
    							<p>1) Pay to: Bank of New Zealand., 80 Queen Street, Auckland, New Zealand., Bank & Branch no. 020100, Swift ֠BKNZNZ22</p>
								<p>Beneficiary : Pacific Financial Derivatives Ltd - Client Bank Account</p>
								<p>Beneficiary Account : NZD 02-0290-0006987-003</p>
								<p>Payment Reference : Your account number with PFD</p>
								<p>&nbsp;</p>
								<p>2) Pay to: ANZ Bank limited, New Zealand., Swift ֠ANZBNZ22</p>
								<p>Beneficiary : Pacific Financial Derivatives Ltd - Client Bank Account</p>
								<p>Beneficiary Account : NZD 06-0145-0277860-01</p>
								<p>Payment Reference: Your account number with Pacific Financial Derivatives Ltd</p>
    						</div>
    					</div>
    					
    					<div class="bank-details">
    						<div class="bank-details-title"><span class="static-block-title">GBP Banking Instructions</span></div>
    						<div class="bank-details-desc">
	    						<p>Pay to : Bank of New Zealand., 80 Queen Street, Auckland, New Zealand., Bank & Branch no. 020100, Swift ֠BKNZNZ22</p>
								<p>Beneficiary : Pacific Financial Derivatives Ltd - Client Bank Account</p>
								<p>Beneficiary Account : GBP 020100- 680991-0006</p>
								<p>Payment Reference : Your account number with PFD</p>
    						</div>
    					</div>
    					
    					<div class="bank-details">
    						<div class="bank-details-title"><span class="static-block-title">AUD Banking Instructions</span></div>
    						<div class="bank-details-desc">
    							<p>1) Pay to : Bank of New Zealand., 80 Queen Street, Auckland, New Zealand., Bank & Branch no. 020100, Swift ֠BKNZNZ22</p>
								<p>Beneficiary : Pacific Financial Derivatives Ltd - Client Bank Account</p>
								<p>Beneficiary Account : AUD  680991-0000</p>
								<p>Payment Reference : Your account number with PFD</p>
								<p>&nbsp;</p>
								<p>2) Pay to : ANZ Bank Limited, New Zealand ֠ANZBNZ22</p>
								<p>Beneficiary:  PFD LTD- CLIENT BANK ACCOUNT</p>
								<p>Beneficiary Account Number : PFDCLI-AUD20</p>
								<p>Payment Reference: Your account number with PFD</p>
    						</div>
    					</div>
    					
    					<div class="bank-details">
    						<div class="bank-details-title"><span class="static-block-title">EUR Banking Instructions</span></div>
    						<div class="bank-details-desc">
    							<p>Pay to : Bank of New Zealand 80., Queen Street, Auckland, New Zealand., Bank & Branch no. 020100, Swift ֠BKNZNZ22</p>
								<p>Beneficiary : Pacific Financial Derivatives Ltd - Client Bank Account</p>
								<p>Beneficiary Account : EUR 020100-680991-0003</p>
								<p>Payment Reference : Your account number with PFD</p>
    						</div>
    					</div>
    					
    					<div class="bank-details">
    						<div class="bank-details-title"><span class="static-block-title">JPY Banking Instructions</span></div>
    						<div class="bank-details-desc">
    							<p>Pay to : Bank of New Zealand., 80, Queen Street, Auckland, New Zealand., Bank & Branch no. 020100, Swift ֠BKNZNZ22</p>
								<p>Beneficiary : Pacific Financial Derivatives Ltd - Client Bank Account</p>
								<p>Beneficiary Account : JPY 680991-0004</p>
								<p>Payment Reference : Your account number with PFD</p>
    						</div>
    					</div>
		        	</div>
	        </section>
	
	
@stop
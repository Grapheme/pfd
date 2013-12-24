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
                <img style="vertical-align:middle" alt="moneybroker" src="images/moneybookers_cup_checkout.gif">
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
                    <select onchange="SetCUPAction()" style="height:28px; padding:5px 5px 5px 3px; width:260px" class="deposit-text" name="payment_methods" id="payment_methods">
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
                <td align="right" class="padded">First Name * :</td>
                  <td><input class="deposit-text" value="" id="firstname" name="firstname"></td>
                </tr>

                <tr>
                    <td align="right" class="padded">Last Name * :</td>
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
                        <td><input class="deposit-text" value="" style="width: 190px" name="amount"></td>
                        <td>
                        	<select style="width:55px; padding:4px 3px 4px 2px; height:auto;" class="deposit-text" id="cup_currency" name="currency">
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
                  <td><input type="submit" class="deposit-btn drop" value=""></td>
                </tr>
            </tbody>
        </table>
    </form>
    </div>
    
    
    
    <div class="deposit-box">
        <div style="margin: 0px; margin-bottom:4px;">
            <img border="0" alt="Technocash" src="images/neteller.jpg">
        </div>
				
		<form action="https://api.neteller.com/netdirect" method="post" name="neteller_form" id="neteller_form">
	          <!--
			  <input type="hidden" name="language_code" value="Client Language">
			  <input type="hidden" name="merch_account" value="john123" maxlength="50">
			  -->
			  
			  <table style="margin:0" class="contact-table">
					<tbody>
						<tr>
						  <td valign="top" align="right" class="padded">Deposit Amount *:</td>
						  <td>
							<input type="text" maxlength="10" size="10" name="amount">
							<input type="hidden" value="4.1" name="version">
							<input type="hidden" value="20858" name="merchant_id">
			  				<input type="hidden" value="594847" name="merch_key">
			  				<input type="hidden" maxlength="50" value="1387902805455" id="merch_transid" name="merch_transid">
			  				<input type="hidden" value="PFD-NZ" name="merch_name">  
						  </td>
						</tr>
						
						<tr>
						  <td valign="top" align="right" class="padded">Currency:</td>
						  <td>
							<select style="width: 95px; padding: 4px 3px 4px 2px; height: auto;" class="deposit-text" name="currency">
								  <option value="USD">USD</option>
								  <option value="EUR">EUR</option>
								  <option value="GBP">GBP</option>
								  <option value="JPY">JPY</option>
							</select>
						  </td>
						</tr>
						
						<tr>
							<td align="right" class="padded">PFD Account Number *:</td>
							<td>
							  <input type="text" class="deposit-text" maxlength="50" value="" name="custom_1" id="detail1_text">
							</td>
						</tr>
						
						<tr>
						  <td valign="top" align="right" class="padded">Neteller Account ID *:</td>
						  <td>
							<input type="text" maxlength="100" size="20" name="net_account">
						  </td>
						</tr>
						
						<tr>
						  <td valign="top" align="right" class="padded">Secure ID *:</td>
						  <td>
							<input type="text" maxlength="6" size="10" name="secure_id">
						  </td>
						</tr>
						
						<tr>
						  <td align="right"></td>
						  <td><input type="submit" style="text-indent: -9999px;" class="deposit-btn drop" value="Make Transfer" name="button" id="neteller__btn"></td>
						</tr>

					</tbody>
				</table>			  
			  
			  
	    </form>
    </div>
    
		        	</div>
	        </section>
	
	
@stop
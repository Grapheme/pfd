@extends('layouts/main')

@section('meta')
	<title>Contact Us - Pacific Financial Derivatives </title>
	<meta name="Description" content="At Pacific financial derivatives we are always interested in hearing from you. Although, we offer world-class brokerage and trading platforms. Please stay on touch on  HYPERLINK "mailto:info@pfd-nz.com" info@pfd-nz.com"/>
	<meta name="Keyword" content="Pacific Financial Derivatives "/>
@stop

@section('wrapper')
	wrapper
@stop

@section('scripts')
	<script src="<?=URL::to('js/contacts.js')?>"></script>
@stop

@section('content')
	
	
			<section class="normal">
	        	<div class="contacts">
	        		<div class="contacts-left-block">
	        			<div class="contacts-block-in">
	        				<div class="f_header">Customer Support Information</div>
	        				<div class="desc">
	        					<p>
	        						<span class="contacts-block-title">Product Inquiries and Service Numbers</span>
									PFD provides continual 24 hour support from 10:00 am Monday New Zealand time (11:00 PM Sunday London time, 6:00 PM Sunday New York time) through 10:00 am Saturday New Zealand time (11:00 PM Friday London time, 6:00 PM Friday New York time)
								</p>
							</div>
							<table class="contact-table">
								<tr>
									<td>Physical Address:</td>
									<td>2A, Fairview Road, Mt. Eden, Auckland, New Zealand</td>
								</tr>
								<tr>
									<td>Mailing Address:</td>
									<td>PO Box 10041, Dominion Road, Auckland 1446, New Zealand</td>
								</tr>
								<tr>
									<td>Client Services:</td>
									<td>+64 9 6320121/142/100</td>
								</tr>
								<tr>
									<td>Email:</td>
									<td>info@pfd-nz.com</td>
								</tr>
								<tr>
									<td>Technical Support:</td>
									<td>+64 9 6320142/121/100</td>
								</tr>
								<tr>	
									<td>Email:</td>
									<td>admin@pfd-nz.com</td>
								</tr>
								<tr>
									<td>Skype:</td>
									<td>pacific.f.d</td>
								</tr>
								<tr>
									<td>MSN Messenger:</td>
									<td>p.f.d@hotmail.co.nz</td>
								</tr>
								<tr>
									<td>Account Opening, IB, W/L:</td>
									<td>+ 64 9 6320129</td>
								</tr>
								<tr>
									<td>Email:</td>
									<td>compliance@pfd-nz.com</td>
								</tr>
								<tr>
									<td>International Dealing Desk:</td>
									<td>+64 9 632 0100</td>
								</tr>
								<tr>
									<td>General Info:</td>
									<td>+64 9 632 0129</td>
								</tr>
								<tr>
									<td>National Toll Free:</td>
									<td>800 000973</td>
								</tr>
							</table>
							<div class="desc">
								<p>
	        						<span class="contacts-block-title">When is it appropriate to call the dealing desk?</span>
									All PFD clients are encouraged to call the dealing desk under the following conditions:
								</p>
	        				</div>
	        				<div class="gen_list">
	        					<div class="gen_list-item">
	        						No immediate access to the Internet
	        					</div>
	        					<div class="gen_list-item">
	        						Client fails to receive a confirmation on an order placed online
	        					</div>
	        					<div class="gen_list-item">
	        						Internet failure or failure to connect to the PFD server
	        					</div>
	        				</div>
	        				<div class="desc">
	        					For any other inquiries that are not trade related please call PFD Customer Support staff, which is available 24-hours a day to assist you at +64 9 6320100/121/142/129
	        				</div>
	        				<table class="contact-table">
								<tr>
									<td>International Toll Free Numbers:</td>
									<td>Country/Region Phone Numbers</td>
								</tr>
								<tr>
									<td>Australia:</td>
									<td>1 800 648597</td>
								</tr>
							</table>
	        			</div>
	        		</div>
	        		<div class="contacts-right-block">
	        			<div class="contacts-block-in">
	        				<div class="f_header">Popular questions</div>
	        				<!--do not modify this script -->
								<div id='nanoRepEmbedContainer'></div><script type='text/javascript'>var _nRepData = _nRepData || [];_nRepData['kb'] = '23452028';
								/* API here */;
								_nRepData['embed'] = {width:'260', height:'530', container: 'nanoRepEmbedContainer', account:'pfdnz', scriptVersion: '2.22.2.31'};(function(){var windowLoadFunc = function(){var _nRepData = window._nRepData || [];_nRepData['windowLoaded'] = true;if (typeof(_nRepData['windowOnload']) === 'function') _nRepData['windowOnload']();};if (window.attachEvent)window.attachEvent('onload', windowLoadFunc);else if (window.addEventListener)window.addEventListener('load', windowLoadFunc, false);var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.defer = true;sc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'my.nanorep.com/widget/scripts/embed.js'; var _head = document.getElementsByTagName('head')[0];_head.appendChild(sc);})();
								</script>
							<div class="f_header">Contact form</div>
	        				<form>
		        				<div class="contact-input"><input id="name" type="text" placeholder="Name"></div>
		        				<div class="contact-input"><input id="email" type="text" placeholder="Email"></div>
		        				<div class="contact-input"><textarea id="message" placeholder="Message"></textarea></div>
		        				<button class="contact-send">Send</button>
	        				</form>
	        				<div class="contact-sent" style="display: none">
	        					<div class="desc">Thank you. Your message has been sent.</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>
	
	
@stop
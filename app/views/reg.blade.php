@extends('layouts/main')


@section('wrapper')
	wrapper
@stop


@section('scripts')
	<script src="js/reg.js"></script>
@stop


@section('content')
	
	
			<section class="account-choose">
	        	<ul class="account-ul">
	        		<li class="account-li"><a href="#" class="account-choose-a" data-type="paper">paper mode account</a>
	        		<li class="account-li"><a href="https://kiwi.pfd-nz.com/signup/logon" class="account-choose-a" data-type="online">Online sign up</a>
	        		<li class="account-li"><a href="#" class="account-choose-a" data-type="demo">Demo account</a>
	        	</ul>
	        </section>
	       	<section class="normal">
	       		<div class="account-block">
		       		<div class="account-div" data-type="paper">
		       			<div class="account-in-div">
		       				<div class="account-div-cont">
		       					<div class="f_header">
			       					Step 1
			       				</div>
			       				<div class="desc">
			       					<p>Once you have decided which of the account forms are right for you, please download the corresponding PDF form from our website right here. Make sure you have read and understood the following documents:</p>
			       					<p>
			       						<p><a class="our-link" href="./downloads/PFD_Client_Services_Agreement_Individual.pdf">PFD Client Services Agreement - Individual</a></p>
			       						<p><a class="our-link" href="./downloads/PFD_Client_Services_Agreement_Company.pdf">PFD Client Services Agreement - Company</a></p>
			       						<p><a class="our-link" href="./downloads/PFD_Disclosure_Statement.pdf">PFD Disclosure Statement </a></p>
			       						<p><a class="our-link" href="./downloads/PFD_General_Terms_and_Conditions.pdf">PFD General Terms & Conditions</a></p>
			       					</p>
			       				</div>
			       			</div>
		       			</div>
		       			<div class="account-in-div">
		       				<div class="account-div-cont">
		       					<div class="f_header">
			       					Step 2
			       				</div>
			       				<div class="desc">
									<p>A copy each of photo-identification document for all directors/authorized signatories.</p>
									<p>A copy of bank deposit slip/bank account statement/credit card statement or other notice of confirmation issued by a bank or any utility accounts showing name and current address for all director/authorized signatories.</p>
								</div>
			       			</div>
		       			</div>
		       			<div class="account-in-div">
		       				<div class="account-div-cont">
		       					<div class="f_header">
			       					Step 3
			       				</div>
			       				<div class="desc">
									<p>Now all that is left for you is to do is to do either physically sending us one copy of the documents as listed in Step 2 to our below address:</p>
									<p class="desc-bold">
										Pacific Financial Derivatives Ltd
										<br>PO Box 10041, Dominion Road
										<br>Auckland 1446
										<br>New Zealand
									</p>
									<p>
										Funding your account once the account is set up is very easy. You have the choice between the classical Swift transfer and a fast and easy online funding. <a href="deposit" class="our-link">(Depositing Funds)</a>
									</p>
								</div>
			       			</div>
		       			</div>
		       		</div>
		       		<div class="account-div" data-type="online">
		       			<div class="account-in-div">
		       				<div class="account-div-cont">
			       				<div class="f_header">
			       					Important Steps
			       				</div>
			       				<div class="gen_list">
			       					<div class="gen_list-item">
			       						Online sign up is intended to be completed in conjunction with the relevant provisions of Pacific Financial Derivative Limited’s Individual Account Client Services Agreement Individual Account
			       					</div>
			       					<div class="gen_list-item">
			       						Online sign up is available for individual clients only
			       					</div>
			       					<div class="gen_list-item">
			       						Company accounts to follow paper mode application
			       					</div>
			       					<div class="gen_list-item">
			       						First step is to register user name, password and email ID
			       					</div>
			       					<div class="gen_list-item">
			       						Await confirmation email containing the above which will be automatically sent to the registered email id to further complete the online sign up
			       					</div>
			       				</div>
			       			</div>
		       			</div>
		       			<div class="account-in-div">
		       				<div class="account-div-cont">
			       				<div class="f_header">
			       					Register
			       				</div>
			       				<form>
			       					<div class="reg-input"><input type="text" placeholder="Username"></div>
			       					<div class="reg-input"><input type="text" placeholder="Password"></div>
			       					<div class="reg-input"><input type="text" placeholder="Confirm password"></div>
			       					<div class="reg-input"><input type="text" placeholder="Email"></div>
			       					<button class="reg-button">Register</button>
			       				</form>
			       			</div>
		       			</div>
		       			<div class="account-in-div">
		       				<div class="account-div-cont">
			       				<div class="f_header">
			       					Log in
			       				</div>
			       				<form>
			       					<div class="reg-input"><input type="text" placeholder="Username"></div>
			       					<div class="reg-input"><input type="text" placeholder="Password"></div>
			       					<button class="reg-button">Login</button>
			       				</form>
			       				<div class="clearfix"></div>
			       				<div class="f_header">
			       					Send password
			       				</div>
			       				<form>
			       					<div class="reg-input"><input type="text" placeholder="email"></div>
			       					<button class="reg-button">Send to email</button>
			       				</form>
			       			</div>
		       			</div>
		       		</div>
		       		<div class="account-div" data-type="demo">
		       			<div class="account-in-div">
		       				<div class="account-div-cont">
			       				<div class="f_header">
			       					Kiwi Trader Gold Zero
			       				</div>
			       				<div class="desc">
			       					System requirements: Windows XP and newer versions
			       				</div>
			       				<a href="https://kiwi.pfd-nz.com/demoreg/registration" class="download-button">Free demo account registration</a>
			       				<a href="./downloads/KiwiTraderSetup.exe" class="download-button-blue">Download Kiwi Trader software.exe</a>
			       			</div>
		       			</div>
		       			<div class="account-in-div">
		       				<div class="account-div-cont">
			       				<div class="f_header">
			       					PFD Trader Demo (MT4)
			       				</div>
			       				<div class="desc">
			       					System requirements: Windows XP and newer versions
			       				</div>
			       				<a href="./downloads/pfd4setup.exe" class="download-button-blue">Download PFD Trader setup.exe</a>
			       			</div>
			       		</div>
		       		</div>
		       	</div>
	        </section>
	
	
@stop
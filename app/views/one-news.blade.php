@extends('layouts/main')

@section('meta')
	<title>Pacific Financial Derivatives Ltd: The online trading provider matching highest standards in integrity and safety</title>
	<meta name="Keywords" content="online cfd trading, best execution broker, fx trading, fx trading nz, forex trading nz, tight fx spreads"/>
	<meta name="Description" content="PFD is the best execution broker dealing in FX trading NZ and PFD trading. Enjoy benefits including segregated and secure client funds, flexible technical analysis function and many more."/>
@stop

@section('wrapper')
	wrapper
@stop

@section('content')
	
	
			<section class="normal">
	        	<div class="news">
	        	
	        	<?php if($_GET['news'] == 'digital')  { ?>
	        	
		        	<div class="news-left-div">
		        		<div class="news-in">
		        			<div class="news-one-left">
			        			<div class="news-left-title">Posted in:</div>
			        			<a href="press" class="news-link">Press room</a>
			        		</div>
			        		<!--<div class="news-one-left">
			        			<div class="news-left-title">Tagged:</div>
			        			<a href="#" class="news-link">Forex Review</a>
			        		</div>-->
		        		</div>
		        	</div>
		        	<div class="news-right-div">
		        		<div class="news-in">
		        			<div class="news-item">
		        				<div class="f_header">Digital Cash Palace about PFD</div>
		        				<a href="#" class="news-date">September 25, 2012</a>
		        				<div class="news-text">
		        					<p>PFD-NZ’s MT4 is an ECN/STP platform which offers Forex (CCY + Metals), CFDs, Indices, General Futures etc for high frequency trading &ndash; no re-quotes, zero latency, 99.99% up time, no minimum funding/deposit stipulations and tight spreads as per link <a href="product">PFD trader (MT4)</a>.</p>
									<p>Traders have the facility to <a href="https://kiwi.pfd-nz.com/signup/logon">signup online and set up accounts instantly</a> </p>
									<p>NZ regulated broker with clients funds protection/safety/security.</p>
									<p><a href="./downloads/PFD_Disclosure_Statement.pdf">PFD Disclosure Statement</a> and <a href="./downloads/PFD_General_Terms_and_Conditions.pdf">PFD General Terms &amp; Conditions</a> are available at&nbsp;<a href="http://www.pfd-nz.com/">PFD site</a>.</p>
									<p>Source:&nbsp; <a target="_blank" href="http://digitalcashpalace.com/forex-brokers/pacific-financial-derivatives-pfd-reviews/">http://digitalcashpalace.com/forex-brokers/pacific-financial-derivatives-pfd-reviews/</a></p>
		        				</div>
		        				<!--<a href="#" class="news-link">« Previous</a>-->
		        			</div>
		        		</div>
		        	</div>
		        	
		        <?php } ?>
		        
		        <?php if($_GET['news'] == 'fx')  { ?>
		        
		        	<div class="news-left-div">
		        		<div class="news-in">
		        			<div class="news-one-left">
			        			<div class="news-left-title">Posted in:</div>
			        			<a href="press" class="news-link">Press room</a>
			        		</div>
			        		<!--<div class="news-one-left">
			        			<div class="news-left-title">Tagged:</div>
			        			<a href="#" class="news-link">Forex Review</a>
			        		</div>-->
		        		</div>
		        	</div>
		        	<div class="news-right-div">
		        		<div class="news-in">
		        			<div class="news-item">
		        				<div class="f_header">PFD on FXrank listing</div>
		        				<a href="#" class="news-date">September 13, 2012</a>
		        				<div class="news-text">
		        					<ul>
										<li>MetaTrader (4) ECN/STP platform,.</li>
										<li>Gold Trading Broker,</li>
										<li>Base Spread &amp; Flexible Leverage,</li>
										<li>Oil Trading Broker,</li>
										<li>Commodities Trading Broker,</li>
										<li>Client funds safety, protection &amp; security,</li>
										<li>ECN execution, no latency, 99.99 up time, no re-quotes.</li>
										<li>Trading in Forex (CCY), Metals, Indices, CFDs and Commodity Futures.</li>
										<li>Deep liquidity from a dozen LPs,</li>
										<li>Authorized Futures Dealer accredited by NZ FMA .</li>
									</ul>
									<p><a href="./downloads/PFD_Disclosure_Statement.pdf">PFD Disclosure Statement</a> and <a href="./downloads/PFD_General_Terms_and_Conditions.pdf">PFD General Terms &amp; Conditions</a> are available at&nbsp;<a href="http://www.pfd-nz.com/">PFD site</a>.</p>
									<p>Source:&nbsp; <a target="_blank" href="http://www.fxrank.net/index.php?page=broker-reviews&brcode=PFD-NZ">http://www.fxrank.net/index.php?page=broker-reviews&brcode=PFD-NZ/</a></p>
		        				</div>
		        				<!--<a href="#" class="news-link">« Previous</a>-->
		        			</div>
		        		</div>
		        	</div>
		        
		        <?php } ?>
		        	
	        	</div>
	        </section>
	
	
@stop
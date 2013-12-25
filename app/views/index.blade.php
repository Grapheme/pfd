@extends('layouts/main')

@section('wrapper')
	index-wrapper wrapper
@stop

@section('content')
	
	
			<section class="slideshow">
	        	<div class="slider-arrow left-arrow">
		        	<div class="top-part"></div>
		        	<div class="bottom-part"></div>
		        </div>
		        <div class="slider-arrow right-arrow">
		        	<div class="top-part"></div>
		        	<div class="bottom-part"></div>
		        </div>
		        
	        	<div class="fotorama-cont">
		        	<div class="fotorama" data-auto="false" data-width="980" data-swipe="false" data-click="false" data-height="320" data-arrows="false" data-autoplay="10000" data-loop="true">
		        		<div class="slide-item">
							<p>Take the PFD advantage</p>
							<ul>
								<li>Segregated and secure client funds
								<li>FX leverave up to 500:1
								<li>New Zealand Regulated
								<li>Advanced and user friendly software
							</ul>
						</div>
		        		<div class="slide-item">
							<p>Take the PFD advantage</p>
							<ul>
								<li>0 pip spread (for Majors)
								<li>No comission for loss trade
								<li>Flexible technical analysis function
							</ul>
						</div>
		        	</div>
		        </div>
	        </section>
	        
	        <section class="main-menu">
	        	<ul>
	        		<li><a href="reg#online">Online sign up<br>for individuals</a>
	        		<li><a href="reg#paper">Paper mode<br>account opening</a>
	        		<li><a href="reg#demo">Demo account<br>registration</a>
	        		<li><a href="deposit">Deposit<br>Options</a>
	        		<li><a href="down">Download<br>products</a>
	        	</ul>
	        </section>
	        <section class="traiders">
	        	<ul>
	        		<li><a href="product-kiwi.html" class="traider-link">
	        			<span class="f_header">
							Kiwi Trader Gold Zero
						</span>
	        			<span class="desc">
	        				Kiwi Trader is the most user friendly trading platform which PFD offers for PFD clients.
	        			</span></a>
	        			
	        		<li><a href="product.html" class="traider-link">
	        			<span class="f_header">
							PFD Trader (MT4)
						</span>
	        			<span class="desc">
							PFD Trader (MT4) is a user friendly dealing and order management system which allows PFD clients to access global markets in real time.	        			
						</span></a>
	        		
	        		<!--<li><a href="#" class="traider-link">
	        			<span class="f_header">
							PFD Trader (Options)
						</span>
	        			<span class="desc">
							The system is a comprehensive internet based trading platform that provides real time charting which also allows clients to manage their portfolio from anywhere in the world.
						</span></a>-->
	        	</ul>
	        </section>
	       	<section class="normal">
	        	<div class="table-container">
	        		@include('layouts/ptable')
	        	</div>
	        	<div class="main-desc">
	        		<div class="main-desc-title">Risk Warning & Disclaimer</div>
	        		<div class="main-desc-text">Trading in futures, options, forex and Over the Counter (OTC) products offered as Contract For Differences (CFDs) by Pacific Financial Derivatives Limited, company #973842 is speculative in nature and not appropriate for all investors. Investors should only use risk capital when trading futures, options, forex and CFDs because there is always the risk of substantial loss. It is important investors carefully consider their objective, financial situation and level of experience. It is recommended that investors seek independent advice before trading. Account access, trade executions and system response may be adversely affected by market conditions, quote delays, system performance and other factors. 
					PFD Disclosure Statement and PFD General Terms & Conditions are available at www.pfd-nz.com.</div>
	        	</div>
	        </section>
	
	
@stop
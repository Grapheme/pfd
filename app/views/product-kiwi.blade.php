@extends('layouts/main')

@section('wrapper')
	wrapper
@stop

@section('content')
	
	
			<section class="product clearfix">
	        	<div class="meta-trader">
	        		<h1 class="f_header">Kiwi Trader</h1>
	        		<div class="desc">
	        			Kiwi Trader is the most user friendly trading platform which PFD offers for PFD clients.
	        		</div>
	        		<a href="down" class="product-dl">Downloads</a>
	        	</div>
	        	<div class="benefits">
	        		<h2 class="s_header">Benefits</h2>
	        		<ul class="gen_list">
	        			<li class="gen_list-item">Trading directly from charts
	        			<li class="gen_list-item">Most user friendly trading windows
	        			<li class="gen_list-item">Advanced charts
	        			<li class="gen_list-item">Graphical representation of orders and positions
	        			<li class="gen_list-item">Embedded indicators programming language
	        			<li class="gen_list-item">Trade System tester
	        			<li class="gen_list-item">Advanced syntax highlighting helps to program indicators
	        			<li class="gen_list-item">Use of interactive help to consult about Indicator
	        			<li class="gen_list-item">Bullish zone display on the chart by Plot Trend function
	        			<li class="gen_list-item">Customizable sounds
	        			<li class="gen_list-item">KiwiTrader is only for genuine traders and not for scalpers
	        		</ul>
	        	</div>
	        </section>
	        <section class="table">
	        	<div class="table-container">
	        		@include('layouts/ptable')
	        	</div>	        	
	        </section>
	
	
@stop
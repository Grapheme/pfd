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
	        	<div class="static">
		        	<div class="static-block static-block-full">
		        		<div class="static-block-in">
		        			<div class="desc" style="min-height: 200px;">


		        				<?php

		        				if ( isset($_GET["msg"]) ) {
									echo '<h1>ERROR. Transaction is NOT completed.</h1><p>' . $_GET['msg'] . '</p>';
								} else {
									echo '
									<h1>Transaction is being processed</h1>
									<p>
										Thank you! Your transaction is being processed. As soon as we receive
										notification, we will transfer the money and let you know.
									</p>';
								}

								?>
								
		        			</div>
		        	</div>
	        </section>
	
	
@stop
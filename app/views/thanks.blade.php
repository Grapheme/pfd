@extends('layouts/main')

<?php
var_dump($_REQUEST);
exit;
?>

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

		        				var_dump($_REQUEST);


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
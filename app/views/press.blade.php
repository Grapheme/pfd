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
		        	<div class="news-left-div">
		        		<div class="news-in">
		        			<div class="f_header">Resent post</div>

		        			<?php foreach ($news as $new) { ?>
		        				<?php if(isset($oneNews)) { if($oneNews->id != $new->id ) { ?>
		        					<a href="press{{$new->id}}" class="news-link">{{$new->title}}</a>
		        				<?php } } else {?>
		        					<a href="press{{$new->id}}" class="news-link">{{$new->title}}</a>
		        			<?php } } ?>

		        			<!--<a href="#" class="news-link">Frexminute.com on PFD</a>
		        			<a href="#" class="news-link">FXempire.com about PFD NZ</a>
		        			<a href="#" class="news-link">FX PIPS On PFD</a>
		        			<a href="#" class="news-link">Actionforex recommends PFD</a>
		        			<a href="#" class="news-link">Forexbrokerz on PFD</a>
		        			<a href="#" class="news-link">ForexbrokerGuide on PFD</a>
		        			<a href="#" class="news-link">Investing.com on PFD</a>
		        			<a href="#" class="news-link">Education-Trading Carries Risks</a>-->
		        		</div>
		        	</div>
		        	<div class="news-right-div">
		        		<div class="news-in">
		        			<?php
		        				if($action == 'one')
		        				{
		        			?>

		        				<div class="news-item">
			        				<div class="f_header">{{$oneNews->title}}</div>
			        				<a href="one-news?news=digital" class="news-date">{{date('d.m.y',strtotime($oneNews->created_at))}}</a>
			        				<div class="news-text">
			        					{{$oneNews->text}}
			        				</div>
			        				<!--<div class="news-text">Posted in NEWS and ANNOUNCEMENTS | Tagged Forex Review</div>-->
			        			</div>

		        			<?php
		        				} else {
		        					foreach ($news as $new) {
		        			?>

		        				<div class="news-item">
			        				<div class="f_header">{{$new->title}}</div>
			        				<a href="one-news?news=digital" class="news-date">{{date('d.m.y',strtotime($new->created_at))}}</a>
			        				<div class="news-text">
			        					{{$new->desc}}
			        				</div>
			        				<a href="press{{$new->id}}" class="news-link">Read more »</a>
			        				<!--<div class="news-text">Posted in NEWS and ANNOUNCEMENTS | Tagged Forex Review</div>-->
			        			</div>

		        			<?php
		        					}
		        				}
		        			?>
		        			
		        			<!--<div class="news-pages">
		        				<a href="#">&lt;</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">...</a><a href="#">8</a><a href="#">9</a><a href="#">10</a><a href="#"></a>
			        		</div>-->
		        		</div>
		        	</div>
	        	</div>
	        </section>
	
	
@stop
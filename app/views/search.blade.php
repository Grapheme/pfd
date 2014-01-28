@extends('layouts/main')

<?php

$cl = Config::get('app.locale');

$meta = 'meta_'.$cl;
$content = 'content_'.$cl;

?>

@section('meta')

	<title>Search Results</title>

@stop


@section('wrapper')
	
	wrapper

@stop


@section('content')
	<section class="normal">
    	<div class="static">
        	<div class="static-title">
        		<div class="f_header">Search results</div>
        		<div class="desc">Found results: <?=count($results)?></div>
        	</div>
        	<div class="static-block static-block-full">
        		<div class="static-block-in">
        			<div class="desc">
        				<?php

	//print_r($results);

	if(empty($results))
	{
		echo "No results";
	} else {
		foreach($results as $result) {
			echo "<a href='/".$result->url."' class='static-block-title' style='color: #000; text-decoration: none;'>".$result->name."</a>";
			echo "<span>".substr(strip_tags($result->$content), 0, 200)."</span>";
		}
	}
	
	?>
        			</div>
        		</div>
        	</div>
        </div>
	</section>

@stop
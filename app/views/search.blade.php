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
        	<div class="static-title" style="margin-bottom: 25px;">
        		<div class="f_header" style="margin-bottom: 0;">Search results</div>
        		<div class="desc" style="color: #979797;">Found results: <?=count($ids)?></div>
        	</div>
        	<div class="static-block static-block-full">
        		<div class="static-block-in">
        			<div class="desc">
        				<?php

	//print_r($results);

	/*if(empty($results))
	{
		echo "No results";
	} else {
		foreach($results as $result) {
			echo "<a href='/".$result->url."' class='static-block-title' style='color: #000; text-decoration: none;'>".$result->name."</a>";
			echo "<span>".substr(strip_tags($result->$content), 0, 200)."</span>";
		}
	}*/
	if(!empty($ids))
	{
		for($i = 0; $i<count($ids); $i++)
		{
			$j = $i + 1;
			echo "<div class='search-res'><a href='/".StatPage::find($ids[$i])->url."' class='static-block-title' style='color: #000; text-decoration: none;'>".$j.". ".StatPage::find($ids[$i])->name."<a>";
			echo $highlighted[$i]."</div>";
		}
	} else {
		echo "No results";
	}
	
	

	?>
        			</div>
        		</div>
        	</div>
        </div>
	</section>

@stop
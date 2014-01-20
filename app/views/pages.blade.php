@extends('layouts/main')

<?php

$cl = Config::get('app.locale');

$meta = 'meta_'.$cl;
$content = 'content_'.$cl;

?>

@section('meta')

	<?php echo $page->$meta; ?>

@stop


@section('wrapper')
	
	{{$page->wrapper}}

@stop


@section('content')

	{{$page->$content}}
	
@stop

@section('scripts')

	{{$page->scripts}}

@stop
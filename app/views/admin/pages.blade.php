@extends('layouts/admin')


@section('content')
	<?php

	if($action=="") {

		echo "<a href='".URL::to('admin/pages/new')."'>Create Page</a>";

		foreach ($pages as $page)
		{
			echo "<br><span>".$page->name."</span> - <a href='".slink::to('admin/pages/delete/'.$page->id)."'>Delete</a>
					- <a href='".slink::to('admin/pages/edit/'.$page->id)."'>Edit</a>";
		}
	}
	
	if($action=="edit") {
	
	?>
		{{ Form::open(array(
            'class' => 'form-signin',
            'role' => 'form'
	        )) 
	    }}
	    <label>Name of page (for Administrator):</label>
	    <input class="form-control" value="{{$pages->name}}" name="name">
	    <br>
	    <label>Url:</label>
	    <input class="form-control" value="{{$pages->url}}" name="url">
		<br>

		<label>Meta section:</label>
		<textarea name="meta" class="form-control" style="height: 100px;">{{$pages->meta}}</textarea><br>
		<label>Main content:</label>
	    <textarea name="content" class="form-control" style="height: 600px;">{{$pages->content}}</textarea><br>
	    <label>Scripts section:</label>
	    <textarea name="scripts" class="form-control" style="height: 60px;">{{$pages->scripts}}</textarea><br>
	    <label>For administrator (main div class name):</label>
	    <input class="form-control" value="{{$pages->wrapper}}" name="wrapper"><br>

	    <input type="submit" value="Сохранить" class="btn">
		
		{{ Form::close() }}

	<?php
	
	}

	if($action=="new") {
	
	?>
		{{ Form::open(array(
            'class' => 'form-signin',
            'role' => 'form'
	        )) 
	    }}
	    <label>Name of page (for Administrator):</label>
	    <input class="form-control" value="" name="name">
	    <br>
	    <label>Url:</label>
	    <input class="form-control" value="" name="url">
		<br>

		<label>Meta section:</label>
		<textarea name="meta" class="form-control" style="height: 100px;"><title>New Page</title></textarea><br>
		<label>Main content:</label>
	    <textarea name="content" class="form-control" style="height: 600px;">
<section class="normal">
  <div class="about">

    Content
    
  </div>
</section>
	    </textarea><br>
	    <label>Scripts section:</label>
	    <textarea name="scripts" class="form-control" style="height: 60px;"></textarea><br>
	    <label>For administrator (main div class name):</label>
	    <input class="form-control" value="wrapper" name="wrapper"><br>


	    <input type="submit" value="Сохранить" class="btn">
		
		{{ Form::close() }}

	<?php
	
	}

	?>
@stop
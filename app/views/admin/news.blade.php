@extends('layouts/admin')


@section('content')
	<?php

	if($action=="") {

		echo "<a href='".URL::to('admin/news/new')."'>Create news</a>";

		foreach ($news as $new)
		{
			echo "<br>".date('d.m.y',strtotime($new->created_at));;
			echo "<div class='main-news-div'>";
	    	echo $new->title."
	    		<a href='".URL::to('admin/news/edit/'.$new->id)."' class='main-news-edit'>Редактировать</a>
	    		<a href='".URL::to('admin/news/delete/'.$new->id)."' class='main-news-edit'>Удалить</a><hr>";
	    	echo $new->desc."<br>";
	    	echo "</div>";
		}
	}
	
	if($action=="edit") {
	
	?>
		{{ Form::open(array(
            'class' => 'form-signin',
            'role' => 'form'
	        )) 
	    }}
	    <input class="form-control" value="{{$news->title}}" name="title">
    	
		<br>
		<textarea name="desc" class="form-control" style="height: 100px;">{{$news->desc}}</textarea><br>
	    <textarea name="text" class="form-control" style="height: 300px;">{{$news->text}}</textarea><br>

	    <input class="form-control" name="date" placeholder="Заголовок" value="{{$news->created_at}}">

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
	    <input class="form-control" name="title" placeholder="Заголовок">
    	
		<br>
		<textarea name="desc" class="form-control" placeholder="Превью" style="height: 100px;"></textarea><br>
	    <textarea name="text" class="form-control" placeholder="Текст" style="height: 300px;"></textarea><br>

	    <input type="submit" value="Создать" class="btn">
		
		{{ Form::close() }}

	<?php
	
	}

	?>
@stop
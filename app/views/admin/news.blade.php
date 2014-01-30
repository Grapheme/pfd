@extends('layouts/admin')


@section('content')
	<?php

	if($action=="") { 

		echo "<a href='".URL::to('admin/news/new')."' class='glyphicon glyphicon-plus'>Create</a>";

		foreach ($news as $new)
		{
			?> 

			<div class="panel panel-default">
  				<div class="panel-heading">

			<?php

			echo date('d.m.y',strtotime($new->created_at));;
	    	echo "<h3 class=\"panel-title\">".$new->title."</h3></div>
	    		<a href='".URL::to('admin/news/edit/'.$new->id)."' class='glyphicon glyphicon-edit'>Edit</a>
	    		<a href='".URL::to('admin/news/delete/'.$new->id)."' class='glyphicon glyphicon-trash'>Delete</a><hr>";
	    	echo "<div class=\"panel-body\">".$new->desc."</div>";

	    	?>

			</div>

	    	<?php
		}

		?>



		<?php
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
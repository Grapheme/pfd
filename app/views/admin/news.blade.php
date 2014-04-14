@extends('layouts/admin')


@section('content')
	<?php

	if($action=="") { 

		echo "<a href='".URL::to('admin/news/new')."' class='glyphicon glyphicon-plus news-button'>Create</a>";

		foreach ($news as $new)
		{
			?> 

			<div class="panel panel-default">
  				<div class="panel-heading">

			<?php

			echo date('d.m.y',strtotime($new->created_at));;
	    	echo "<h3 class=\"panel-title\">".$new->title."</h3></div>
	    		<a href='".URL::to('admin/news/edit/'.$new->id)."' class='glyphicon glyphicon-edit news-button'>Edit</a>
	    		<a href='".URL::to('admin/news/delete/'.$new->id)."' class='glyphicon glyphicon-trash delete-item news-button'>Delete</a><hr>";
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

	    <ul>

		    <li><label>Title:</label><input class="form-control" value="{{$news->title}}" name="title">
			<li><label>Preview:</label><textarea name="desc" class="form-control redactor" style="height: 100px;">{{$news->desc}}</textarea>
		    <li><label>Text:</label><textarea name="text" class="form-control redactor" style="height: 300px;">{{$news->text}}</textarea>
		    <li><label>Date:</label><input class="form-control" name="date" placeholder="Заголовок" value="{{$news->created_at}}">
		    <li><input type="submit" value="Сохранить" class="btn">
		
		</ul>
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
	    <ul>

		    <li><label>Title:</label><input class="form-control" name="title">
			<li><label>Preview:</label><textarea name="desc" class="form-control redactor" style="height: 100px;"></textarea>
		    <li><label>Text:</label><textarea name="text" class="form-control redactor" style="height: 300px;"></textarea>
		    <li><input type="submit" value="Создать" class="btn">
		
		</ul>

		{{ Form::close() }}

	<?php
	
	}

	?>
@stop
@extends('layouts.admin')

@section('content')

<h1>All StatPages</h1>

<p>{{ link_to_route('admin.statPages.create', 'Add new statPage') }}</p>

@if ($statPages->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Url</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($statPages as $statPage)
				<tr>
					<td>{{{ $statPage->name }}}</td>
					<td>{{{ $statPage->url }}}</td>
                    <td>{{ link_to_route('admin.statPages.edit', 'Edit', array($statPage->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.statPages.destroy', $statPage->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no statPages
@endif

@stop

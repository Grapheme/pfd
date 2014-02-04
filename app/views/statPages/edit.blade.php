@extends('layouts.admin')

@section('content')

<h1>Edit StatPage</h1>

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

{{ Form::model($statPage, array('method' => 'PATCH', 'class' => 'pageForm','route' => array('admin.statPages.update', $statPage->id))) }}
    <ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('url', 'Url:') }}
            {{ Form::text('url') }}
        </li>

        <ul class="nav nav-tabs">
          <li class="active lang-change" data-lang="en"><a href="#">English</a></li>
          <li class="lang-change" data-lang="ve"><a href="#">tiếng việt</a></li>
          <!--<li><a href="#">Chinise</a></li>-->
        </ul>


        <div data-lang="en" class="lang-div">

            <li>
                {{ Form::label('meta_en', 'English meta:') }}
                {{ Form::textarea('meta_en') }}
            </li>

            <li>
                {{ Form::label('content_en', 'English content:') }}
                {{ Form::textarea('content_en', null, array('class' => 'redactor')) }}
            </li>

        </div>


        <div data-lang="ch" class="lang-div">

            <li>
                {{ Form::label('meta_ch', 'Meta_ch:') }}
                {{ Form::textarea('meta_ch') }}
            </li>

            <li>
                {{ Form::label('content_ch', 'Content_ch:') }}
                {{ Form::textarea('content_ch', null, array('class' => 'redactor')) }}
            </li>

        </div>


        <div data-lang="ve" class="lang-div">

            <li>
                {{ Form::label('meta_vn', 'VN meta:') }}
                {{ Form::textarea('meta_vn') }}
            </li>

            <li>
                {{ Form::label('content_vn', 'VN content:') }}
                {{ Form::textarea('content_vn', null, array('class' => 'redactor')) }}
            </li>

        </div>


        <li style="display: none;">
            {{ Form::label('wrapper', 'Wrapper:') }}
            {{ Form::text('wrapper') }}
        </li>

        <li style="display: none;">
            {{ Form::label('scripts', 'Scripts:') }}
            {{ Form::textarea('scripts') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('admin.statPages.show', 'Cancel', $statPage->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@stop

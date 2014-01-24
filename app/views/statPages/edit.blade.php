@extends('layouts.admin')

@section('content')

<h1>Edit StatPage</h1>
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

        <a href="#" data-lang="en" class="lang-change">EN</a>
        <a href="#" data-lang="ch" class="lang-change">CH</a>
        <a href="#" data-lang="ve" class="lang-change">VE</a>


        <div data-lang="en" class="lang-div">

            <li>
                {{ Form::label('meta_en', 'Meta_en:') }}
                {{ Form::textarea('meta_en') }}
            </li>

            <li>
                {{ Form::label('content_en', 'Content_en:') }}
                {{ Form::textarea('content_en') }}
            </li>

        </div>


        <div data-lang="ch" class="lang-div">

            <li>
                {{ Form::label('meta_ch', 'Meta_ch:') }}
                {{ Form::textarea('meta_ch') }}
            </li>

            <li>
                {{ Form::label('content_ch', 'Content_ch:') }}
                {{ Form::textarea('content_ch') }}
            </li>

        </div>


        <div data-lang="ve" class="lang-div">

            <li>
                {{ Form::label('meta_vn', 'Meta_vn:') }}
                {{ Form::textarea('meta_vn') }}
            </li>

            <li>
                {{ Form::label('content_vn', 'Content_vn:') }}
                {{ Form::textarea('content_vn') }}
            </li>

        </div>


        <li>
            {{ Form::label('wrapper', 'Wrapper:') }}
            {{ Form::text('wrapper') }}
        </li>

        <li>
            {{ Form::label('scripts', 'Scripts:') }}
            {{ Form::textarea('scripts') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('admin.statPages.show', 'Cancel', $statPage->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop
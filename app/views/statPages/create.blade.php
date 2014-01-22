@extends('layouts.admin')

@section('content')

<h1>Create StatPage</h1>

{{ Form::open(array('route' => 'admin.statPages.store', 'class' => 'pageForm')) }}
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
        <a href="#" data-lang="ve" class="lang-change">ve</a>


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
                {{ Form::label('meta_ve', 'Meta_ve:') }}
                {{ Form::textarea('meta_ve') }}
            </li>

            <li>
                {{ Form::label('content_ve', 'Content_ve:') }}
                {{ Form::textarea('content_ve') }}
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
            {{ Form::submit('Create', array('class' => 'btn btn-info')) }}
            {{ link_to_route('admin.statPages.show', 'Cancel', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop



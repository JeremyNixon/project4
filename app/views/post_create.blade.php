@extends('base')
@section('title')
		<title>Create Post</title>
@stop
@section('body')

<h1>Add a New Post</h1>


	{{ Form::open(array('url' => 'create-post', 'method' => 'POST')) }}


		<div class='form-group'>
			{{ Form::label('title') }} 
			{{{ Form::text('title') }}}
		</div>

		<div class='form-group'>
			{{ Form::label('content') }} 
			{{{ Form::text('content') }}}
		</div>

		<div class='form-group'>
			{{ Form::label('user id') }} 
			{{{ Form::text('user_id') }}}
		</div>

		<div class='form-group'>
			{{ Form::label('rating') }} 
			{{{ Form::text('rating') }}}
		</div>


		{{ Form::submit('Add') }}

	{{ Form::close() }}

@stop
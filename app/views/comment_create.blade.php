@extends('base')
@section('title')
		<title>Create Comment</title>
@stop
@section('body')

<h1>Add a New Comment</h1>


	{{ Form::open(array('url' => 'create-comment', 'method' => 'POST')) }}


		<div class='form-group'>
			{{ Form::label('content') }} 
			{{{ Form::text('content') }}}
		</div>

		<div class='form-group'>
			{{ Form::label('user id') }} 
			{{{ Form::text('user_id') }}}
		</div>

		<div class='form-group'>
			{{ Form::label('post id') }} 
			{{{ Form::text('post_id') }}}
		</div>

		<div class='form-group'>
			{{ Form::label('votes') }} 
			{{{ Form::text('votes') }}}
		</div>


		{{ Form::submit('Add') }}

	{{ Form::close() }}

@stop
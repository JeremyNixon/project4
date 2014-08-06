@extends('base')
@section('title')
		<title>Create User</title>
@stop
@section('body')

<h1>Become a New User</h1>


	{{ Form::open(array('url' => 'create-user', 'method' => 'POST')) }}


		<div class='form-group'>
			{{ Form::label('Name') }} 
			{{{ Form::text('name') }}}
		</div>

		<div class='form-group'>
			{{ Form::label('Password') }} 
			{{{ Form::text('password') }}}
		</div>

		<div class='form-group'>
			{{ Form::label('Karma') }} 
			{{{ Form::text('karma') }}}
		</div>



		{{ Form::submit('Add') }}

	{{ Form::close() }}

@stop
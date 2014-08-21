@extends('base')
@section('title')
		<title>Create User</title>
@stop
@section('body')
<div class="form-container">
<p class="create-user-title">Become a New User<p>

	
	{{ Form::open(array('url' => 'user_create', 'method' => 'POST')) }}

		
		<div class='form-group'>
			{{ Form::label('Name') }}<br>
			{{ Form::text('name') }}<br><br>
		</div>

		<div class='form-group'>
			{{ Form::label('Password') }}<br>
			{{ Form::text('password') }}
			{{ Form::label('(>6 characters)') }} <br><br>
		</div>



		{{ Form::submit('Add') }}

	{{ Form::close() }}
	</div>
@stop
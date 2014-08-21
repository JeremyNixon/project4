@extends('base')
@section('title')
		<title>Login</title>
@stop
@section('body')

<h1>Login!</h1>


	{{ Form::open(array('url' => '/login')) }}

	Name:<br>
	{{ Form::text('name') }}<br>

    Password:<br>
    {{ Form::password('password') }}<br><br>

    {{ Form::submit('Submit') }}

{{ Form::close() }}

@stop
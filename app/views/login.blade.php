{{ Form::open(array('url' => '/login')) }}

	Name:<br>
	{{ Form::text('name') }}<br>

    Password:<br>
    {{ Form::password('password') }}<br><br>

    {{ Form::submit('Submit') }}

{{ Form::close() }}
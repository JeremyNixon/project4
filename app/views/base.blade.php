<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
date_default_timezone_set ('america/new_york');
?>

<!doctype html>
<html>
<head>
	@yield('title')
	@section('head')
		<link rel=stylesheet type="text/css" href="{{ URL::asset('/style.css') }}">
		<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
		
		
	@show

</head>

<body>
	@if(Session::get('flash_message'))
        <div class='flash-message'>{{ Session::get('flash_message') }}</div>
    @endif
	<div id='header'>
		<ul id="navlist">
		<li><a href="/">Home</a><li>
		<li><a href="/data">Time Data</a></li>
		<li><a href="/discuss">Time Discussion</a></li>
		<li><a href="/literature">The Literature</a></li>
		<li><a href="/about">About Us</a></li>
		<li><a href="/contact">Contact</a></li>
		@if(Auth::check())
			<li><a href="/logout">Logout</a></li>
		@else
		<li><a href="/user_create">Sign Up</a>|<a href="/login">Login</a></li>
		@endif

		@if(Auth::check())
    		<li>Hello {{ Auth::user()->name; }}!</li>
		@endif 
		

		</ul>
	</div><br><br>
	<div id="container">
		@yield('body')
	</div>


</body>
</html>
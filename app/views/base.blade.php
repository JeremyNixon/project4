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
	<div id='header'>
		<ul id="navlist">
		<li><a href="/">Home</a><li>
		<li><a href="/data">Time Data</a></li>
		<li><a href="/discuss">Time Discussion</a></li>
		<li><a href="/literature">The Literature</a></li>
		<li><a href="/about">About Us</a></li>
		<li><a href="/contact">Contact</a></li>
		</ul>
	</div><br><br>
	<div id="container">
		@yield('body')
	</div>



</body>
</html>
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
		<link rel=stylesheet type="text/css" href="{{ URL::asset('/cs109-style.css') }}">
		<link href='http://fonts.googleapis.com/css?family=Muli:300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

		@show
</head>
<div id="header">
		<ul id="navlist">
			<li><a style="color: #fff;" href="/cs109/">Home</a><li>
			<li><a style="color: #fff;" href="/cs109/topic1">Historical Frequencies</a><li>
			<li><a style="color: #fff;" href="/cs109/topic2">Popular v. Classical Songs</a><li>
			<li><a style="color: #fff;" href="/cs109/topic3">Genre Classification</a><li>
			<li><a style="color: #fff;" href="/cs109/topic4">Popularity</a><li>
			<li><a style="color: #fff;text-align: right;" href="https://github.com/JeremyNixon/CS-109-Final-Project">iPython</a><li>
		</ul>
</div>
	
<body>
		@yield('body')
<?php





	?>
</body>
</html>
@extends('base')
@section('title')
		<title>Welcome to Timestamp</title>
@stop
@section('body')
<div class="home-banner">
	<div class="welcome-banner"> Welcome to Timestamp Tracking	! </div>
	<div class="welcome-information">No typing. No timers. A completely new approach to time tracking.</div>
</div>

<div class="home-content">
	<div class="left-content">
		<img id="head-image-left" src="http://a4.mzstatic.com/us/r30/Purple/v4/75/c6/c8/75c6c83c-596d-3e5d-6690-c860c41c2643/screen568x568.jpeg">
		<p class="left-content-text">TimeStamp provides an interface which makes it easy to enter and amend data in your calendar.</p>
	</div>
	<div class="right-content">

		<img id="head-image-right" src="http://a3.mzstatic.com/us/r30/Purple6/v4/1b/8e/03/1b8e0328-065e-e23e-0da1-cc02b4cf5247/screen568x568.jpeg">
		<p class="right-content-text">TimeStamp aggregates your data to tell you how you spend your life.</p>
	</div>
</div>
<div class="download-button">
<a href="https://itunes.apple.com/us/app/timestamp-tracking/id608154651?mt=8"><img class="appstore" src="{{ URL::asset('/badge-appstore.png') }}">
</a>
</div>
@stop

@extends('base')
@section('title')
		<title>Contact Us</title>
@stop
@section('body')
<div class="contact-container">
	<h2> Here's how to contact us! </h2>
	<p> For help or to start a conversation:<p>
	<div class="contact-jeremy">
		<p>Jeremy Nixon<p>
				<img class="contact-picture" src="{{ URL::asset('/jeremypicture.jpg') }}">
		<div class="contact-email">jnixon2@gmail.com</div>
	</div>
	<div class="contact-awais">
		<p>Awais Hussain<p>
			<img class="contact-picture" src="{{ URL::asset('/awais.jpg') }}">
		<div class="contact-email">ahussain3@college.harvard.edu</div>		
	</div>
</div>
@stop
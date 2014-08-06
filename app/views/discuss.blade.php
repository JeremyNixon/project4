@extends('base')
@section('title')
		<title>Discuss</title>
@stop
@section('body')

<h1> Welcome to Time Discussion! </h2>

<?php
/* Create Post Form */

		?> <h3><a href="/post_create">Create New Post</a></h3><br> <?php

		$collection = Post::all();

		# loop through the Collection and access just the data
		foreach($collection as $post) {
		    echo $post->content."<br>";
		}



?>


@stop
@extends('base')
@section('title')
		<title>Discuss</title>
@stop
@section('body')

<h1> Welcome to Time Discussion! </h2>

<?php
/* Create Post Form */

		?> <div id="create-post"><a href="/post_create">Create New Post</a></div><br> <?php

		$collection = Post::all();

		# loop through the Collection and access just the data
		?> <div id="post-link"> <?php
		foreach($collection as $post) {
		    echo  "<a href=\"/post/" . $post->id . "\">" . $post->title . "</a>" . "<br><br>";
		}
		?></div><?php



?>


@stop


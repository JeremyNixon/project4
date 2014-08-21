@extends('base')
@section('title')
		<title>Forum</title>
@stop
@section('body')

<h1> Welcome to the Forum </h2>

@if(Auth::check())
<div id="create-post"><a href="/post_create">Create New Post</a></div><br>
@else
<p id="create-post">Login to Create a New Post!</p>
@endif
 <?php

		$collection = Post::all();

		# loop through the Collection and access just the data
		?> <div id="post-link"> <?php
		foreach($collection as $post) {
			?><div class="individual-post"><?php
		    echo  "<a href=\"/post/" . $post->id . "\">" . $post->title . "</a>" . $post->author ."<br><br>";
		    ?></div><?php
		}
		?></div><?php



?>


@stop


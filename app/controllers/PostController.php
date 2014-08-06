<?php

	class PostController extends \BaseController {



		public function postCreate() {

	    $post = new Post();
	    $post->fill(Input::all());
	    $post->save();

	    return 'A new post has been added! Check your database to see..';

	}

	public function postRead(){

		$collection = Post::all();

		# loop through the Collection and access just the data
		foreach($collection as $post) {
		    echo $post->content."<br>";
		}  

}
}
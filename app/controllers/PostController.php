<?php

	class PostController extends \BaseController {



		public function postCreate() {

	    $post = new Post();
	    $post->user_id = Auth::user()->id;
	    $post->rating = 0;
	    $post->fill(Input::all());
	    $post->save();
	    $id = $post->id;

	    return View::make('post')->with('id', $id);

	}

	public function postRead($id){
		return View::make('post')->with('id', $id);
		}  

}

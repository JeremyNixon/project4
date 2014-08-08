<?php

	class CommentController extends \BaseController {

		
		public function postCreate($id) {
	    $comment = new Comment();
	    $comment->user_id = Auth::user()->id;
	    $comment->votes = 0;
	    $comment->post_id = $id;
	    $comment->fill(Input::all());
	    $comment->save();

	    return View::make('post')->with('id', $comment->post_id);

	}

}
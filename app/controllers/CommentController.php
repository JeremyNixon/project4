<?php

	class CommentController extends \BaseController {

		public function postCreate() {

	    $comment = new Comment();
	    $comment->fill(Input::all());
	    $comment->save();

	    return 'You have added a new comment! Check your database to see..';

	}

}
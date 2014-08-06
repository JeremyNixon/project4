<?php

	class UserController extends \BaseController {

		public function postCreate() {

	    $user = new User();
	    $user->fill(Input::all());
	    $user->save();

	    return 'You have been added as a new user! Check your database to see..';

	}

}
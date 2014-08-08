<?php

	class UserController extends \BaseController {

		public function postCreate() {

	    $user = new User();
	    $user->name = Input::get('name');
	    $user->password = Hash::make(Input::get('password'));
	    $user->karma = Input::get('karma');
	    $user->save();



        
		Auth::login($user);

        return Redirect::to('/')->with('flash_message', 'Welcome to Timestamp!');
	}

}
<?php

	class UserController extends \BaseController {

		public function postCreate() {

			
		$rules = array('password' => 'min:6');       

		$validator = Validator::make(Input::all(), $rules);


		if($validator->fails()) {

	    	return Redirect::to('/user_create')
	        ->with('flash_message', 'Sign up failed; please fix the errors listed below.')
	        ->withInput()
	        ->withErrors($validator);
	        
}

	    $user = new User();
	    $user->name = Input::get('name');
	    $user->password = Hash::make(Input::get('password'));
	    $user->karma = Input::get('karma');
	    $user->save();



        
		Auth::login($user);

        return Redirect::to('/')->with('flash_message', 'Welcome to Timestamp!');
	}

}
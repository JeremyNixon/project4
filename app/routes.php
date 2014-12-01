<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/testing', function()
{
    return View::make('testing');
});

Route::get('/', function()
{
	return View::make('cs109/home');
});

Route::get('/data', function()
{
	return View::make('data');
});

Route::get('/discuss', function()
{
	return View::make('discuss');
});

Route::get('/literature', function()
{
	return View::make('literature');
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/contact', function()
{
	return View::make('contact');
});

# Quiz, intended to be 109 project ******************************************************

Route::get('/cs109', function(){
    return View::make('/cs109/home');
});

Route::get('/cs109/take', function(){
    return View::make('/cs109/take');
});

Route::post('/cs109/take', 'quizController@postCreate');


Route::get('/cs109/test', function(){
    return View::make('/cs109/test');
});

Route::get('/cs109/process', function(){
    return View::make('/cs109/process');
});

Route::get('/cs109/possibilities', function(){
    return View::make('/cs109/possibilities');
});



# Authentication *************************************************

Route::get('/login', array('before' => 'guest', function() {
            return View::make('login');
        }
    )
);

Route::post('/login', array( 'before' => 'csrf', function() {

            $credentials = Input::only('name', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('login');
        }
    )
);


Route::get('/logout', function() {

    # Log out
    Auth::logout();

    # Send them to the homepage
    return Redirect::to('/');

});


# CRUD ************************************************************

	# Users *******************************************************


Route::get('user_create', array( 'before' => 'guest', function(){
    return View::make('user_create');
}));

Route::post('/user_create', 'UserController@postCreate');

Route::get('/create-user', function() {

    # Instantiate a new user model class
    $user = new User();

    # Set 
    $user->name = 'Jeremy';
    $user->password = 'grizzly';
    $user->karma = 99;
    # This is where the Eloquent ORM magic happens
    $user->save();

    return 'A new user has been added! Check your database to see..';

});

Route::get('/read-user', function() {

    $collection = User::all();

# loop through the Collection and access just the data
foreach($collection as $user) {
    echo $user->name."<br>";
}   

});

Route::get('/update-user', function() {

    # First get a user to update
    $user = User::where('id', 'LIKE', '1')->first();

    # Give it a different name
    $user->name = 'Nixon';

    # Save the changes
    $user->save();

    return "User update complete; check the database to see if your update worked...";

});


Route::get('/delete-user', function() {

    # First get a user to delete
    $user = User::where('id', 'LIKE', '1')->first();

    # Goodbye!
    $user->delete();

    return "User deletion complete; check the database to see if it worked...";

});

	# Comments ****************************************************

Route::get('/comment_create/{id}', array('before' => 'user', function($id){
    return View::make('comment_create')->with('id', $id);
}));

Route::post('/create-comment/{id}', 'CommentController@postCreate');


Route::get('/read-comment', function() {

    $collection = Comment::all();

# loop through the Collection and access just the data
foreach($collection as $comment) {
    echo $comment->content."<br>";
}   

});



	# Post **************************************************************


Route::get('/post_create', function()
{
    return View::make('post_create');
});

Route::post('/create-post', 'PostController@postCreate');



Route::get('/post/{id}', 'PostController@postRead');


# mySQL Test ******************************************************

Route::get('mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    var_dump($results);

});


# Database testing ******************************************************
# /app/routes.php
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});
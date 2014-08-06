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

Route::get('/', function()
{
	return View::make('landing');
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

# Create Form Views ******************************************************





# CRUD ************************************************************

	# Users *******************************************************


Route::get('user-create', function(){
    return View::make('user-create');
});

Route::post('/create-user', 'UserController@postCreate');

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

Route::get('comment_create', function(){
    return View::make('comment_create');
});

Route::post('/create-comment', 'CommentController@postCreate');


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



Route::get('/read-post', 'PostController@postRead');


# mySQL Test ******************************************************

Route::get('mysql-test', function() {

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    var_dump($results);

});


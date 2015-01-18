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

Route::get('/', function()
{
	return View::make('posts.home');
	//Route can provide view directly(url<->html page location)
	//url:'/', html page location: 'views/hello.php'
	//this also can be done in the controller(like the other route in the 
	//following)
	//Input the message to the webpage;
	//echo 'this is home page';
});
*/
Route::get('/', array('as'=>'home', 'uses'=>'BlogController@get_home'));
Route::get('/post/new', array('as'=>'newPost', 'uses'=>'BlogController@newPost'));
Route::get('/post/create', array('as'=>'createPost', 'uses'=>'BlogController@createPost'));
Route::get('/post/{id}', array('as'=>'viewPost', 'uses'=>'BlogController@viewPost'));
Route::get('/post/{id}/comment', array('as'=>'createComment', 'uses'=>'BlogController@createComment'));
Route::get('/hometest', array('as'=>'hometest', 'uses'=>'BlogController@hometest'));
Route::get('/hometesta', array('as'=>'hometesta', 'uses'=>'BlogController@hometesta'));
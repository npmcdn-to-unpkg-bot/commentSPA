<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Setup Blade
Blade::setContentTags('<%', '%>');        // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data




Route::get('/', function () {
    return view('index');
});


// API routes
Route::group(['prefix' => 'api'], function(){
	Route::resource('comment', 'CommentController',
		['only' => ['index', 'store', 'destroy']]);

});


/*

App::missing(function($exception){
	//return view('index');
	return view('welcome');

});
*/
<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {

// 	$people =['Taylor', 'Matt', 'Jefrey'];
//     return view('welcome', compact('people'));
// });

Route:: get('/', function(){
	return view('home');
});

Route:: get('/value', function(){
	return view('value');
});

Route:: get('/service', function(){
	return view('service');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route:: get('/quote', 'PagesController@quote');

Route:: post('/quote', 'PagesController@SubmitQuote');
});

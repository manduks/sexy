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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'HomeController@index');

Route::resource('models', 'ModelsController');

Route::resource('videos', 'VideosController');

Route::resource('photos', 'PhotosController');

Route::get('login',function(){
	return View::make('users.login');
});
Route::post('login', array('as' => 'login', function(){
	$userData = array(
		'email' => Input::get('email'),
		'password' => Input::get('password')
	);

    if(Auth::attempt($userData)){
    	return Redirect::to('party');
    }
    else{
    	return Redirect::to('login');
    }
}));


Route::get('signup',function(){
	return View::make('users.signup');
});
Route::post('signup', array('as' => 'signup', function(){
    $userData = array(
		'email' => Input::get('email'),
		'password' => Hash::make(Input::get('password'))
	);
	$user = new User($userData);
	$user->save();
	return Redirect::to('login');
}));

Route::get('/party', array('before' => 'auth',function(){
	$videos = Video::all();
	return View::make('home.videos', compact('videos'));
}));

Route::get('logout',function(){
	Auth::logout();
	return Redirect::to('/');
});


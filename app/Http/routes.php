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

	/*Home Page Routes*/
	Route::get('/', 'HomeController@index');
	Route::get('/about', 'HomeController@about');



	/*Study Hub Routes*/
	Route::get('/study_hub', 'StudyHubController@index');
	// Route::get('/study_hub/pricing', 'StudyHubController@pricing');
	Route::get('/study_hub/auth/login', 'StudyHubController@login');
	Route::get('/study_hub/auth/register', 'StudyHubController@register');
	Route::resource('/study_hub/courses','StudyCoursesController');



	/*Ed Base Routes*/
	Route::get('/ed_base', 'EdBaseController@index');



	/*Supporting Hand Routes*/
	Route::get('/supporting_hand', 'SupportingHandController@index');



	/*Book Shelve Routes*/
	Route::get('/book_shelve', 'BookShelveController@index');



//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

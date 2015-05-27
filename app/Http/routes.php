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
	Route::get('/study_hub/students/dashboard', ['as'=>'dashboard', 'uses'=>'StudyHubController@dashboard']);
	Route::get('/study_hub/students/courses', ['as'=>'student_courses', 'uses'=>'StudyHubController@courses']);
	Route::get('/study_hub/students/courses/course', ['as'=>'take_course', 'uses'=>'StudyHubController@course']);
	Route::get('/study_hub/students/courses/course/quiz', ['as'=>'take_quiz', 'uses'=>'StudyHubController@course_quiz']);

	// Route::get('/study_hub/pricing', 'StudyHubController@pricing');
	Route::get('/study_hub/auth/login', 'StudyHubController@getLogin');
	Route::post('/study_hub/auth/login', 'StudyHubController@postLogin');

	Route::get('/study_hub/auth/register', 'StudyHubController@getRegister');
	Route::post('/study_hub/auth/register', 'StudyHubController@postRegister');

	Route::resource('/study_hub/courses','StudyCoursesController');



	/*Ed Base Routes*/
	Route::get('/ed_base', 'EdBaseController@index');
	Route::get('ed_base/auth/login', ['as'=>'login', 'uses'=>'EdBaseController@login']);


	Route::get('ed_base/admin/admin_home', ['as'=>'admin_master', 'uses'=>'EdBaseController@master_dashboard']);

	Route::get('ed_base/admin/school_home', ['as'=>'admin_school', 'uses'=>'EdBaseController@school_dashboard']);



	/*Supporting Hand Routes*/
	Route::get('/supporting_hand', ['as' => 'index', 'uses' => 'SupportingHandController@index']);
	Route::get('/supporting_hand/contact_us', ['as' => 'contact_us', 'uses' => 'SupportingHandController@contact']);
	Route::get('/supporting_hand/help_list', ['as' => 'help_list', 'uses' => 'SupportingHandController@help_list']);
	Route::get('/supporting_hand/team', ['as' => 'team', 'uses' => 'SupportingHandController@team']);
	Route::get('/supporting_hand/gallery', ['as' => 'gallery', 'uses' => 'SupportingHandController@gallery']);
	Route::get('/supporting_hand/how_to_help', ['as' => 'instruction', 'uses' => 'SupportingHandController@instruction']);
	Route::get('/supporting_hand/post_help', ['as' => 'post_help', 'uses' => 'SupportingHandController@posthelp']);
	Route::get('/supporting_hand/helps/help', ['as' => 'help', 'uses' => 'SupportingHandController@help']);



	/*Book Shelve Routes*/
	Route::get('/book_shelve', 'BookShelveController@index');



//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

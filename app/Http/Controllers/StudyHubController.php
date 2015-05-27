<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudyHubController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index(){
		return view('study_hub.index');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function getLogin(){
		return view('study_hub.auth.login');
	}

	/**
	 *
	 */
	public function postLogin(){

	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function getRegister(){
		return view('study_hub.auth.register');
	}

	/**
	 *
	 */
	public function postRegister(){

	}

	// public function pricing(){
	// 	return view('study_hub.pricing');
	// }

	public function dashboard(){
		return view('study_hub.students.dashboard');
	}

	public function courses(){
		return view('study_hub.students.courses');
	}

	public function course(){
		return view('study_hub.students.take_course');
	}

	public function course_quiz(){
		return view('study_hub.students.take_quiz');
	}

}

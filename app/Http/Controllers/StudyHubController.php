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
	public function login(){
		return view('study_hub.auth.login');
	}

	public function register(){
		return view('study_hub.auth.register');
	}

	// public function pricing(){
	// 	return view('study_hub.pricing');
	// }

}

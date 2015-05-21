<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index(){
		return view('home.index');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function about(){
		return view('home.about');
	}

}

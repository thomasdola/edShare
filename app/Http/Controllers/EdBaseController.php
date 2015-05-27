<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EdBaseController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index(){
		return view('edBase.index');
	}


	public function login(){
		return view('edBase.auth.login');
	}


	public function master_dashboard(){
		return view('edBase.admin.index');
	}

	public function school_dashboard(){
		return view('edBase.schools.index');
	}

}

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

}

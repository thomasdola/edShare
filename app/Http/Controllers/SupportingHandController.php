<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SupportingHandController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index(){
		return view('supportingHand.index');
	}

}

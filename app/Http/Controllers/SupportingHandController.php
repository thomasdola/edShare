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

	public function posthelp(){
		return view('supportingHand.posthelp');
	}

	public function help_list(){
		return view('supportingHand.help_list');
	}

	public function instruction(){
		return view('supportingHand.instruction');
	}


	public function team(){
		return view('supportingHand.team');
	}


	public function gallery(){
		return view('supportingHand.gallery');
	}

	public function contact(){
		return view('supportingHand.contact');
	}


	public function help(){
		return view('supportingHand.help');
	}
}

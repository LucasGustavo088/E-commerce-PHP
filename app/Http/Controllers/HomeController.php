<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
	function index(){
    	return view('front.home');
	}

	public function shirts(){
		return view('front.shirts');
	}
}

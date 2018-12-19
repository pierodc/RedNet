<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home()
	{
		return view('home',[
			'foo' => request('query')
		]);	
	}
	
	public function about()
	{
		return view('about');	
	}
	
	public function contact()
	{
		return view('contact');	
	}
	
}

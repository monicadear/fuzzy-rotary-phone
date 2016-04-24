<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller
{
	
    public function home()
    {
	    return view('welcome');
    }


    public function about()
    {
		return view('pages.about'); // resources/views/pages/about.blade.php
    }


	public function contact()
    {
		return view('pages.contact'); // resources/views/pages/contact.blade.php
    }


}

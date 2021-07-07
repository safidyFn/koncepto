<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		return view('pages/home/coming_soon_page');
	}
	
}
<?php

namespace App\Controllers;

class Accueil extends BaseController
{
	public function index()
	{

		return view('pages/Accueil/accueil.php');
	}

	public function home()
	{
		return view('pages/home/home.php');
	}
}
<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(): string
	{
		return view('account/login');
	}

	public function dashboard(): string
	{
		$data['pageTitle'] = 'Dashboard';
		$data['pageContent'] = view('home/dashboard/index');
		$data['renderScripts'] = view('home/dashboard/scripts');
		return view('render', $data);
	}
}

<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'Login Page',
			
		];
		return view('auth/v_login', $data);
	}
	
	public function registration()
	{
		$data=[
			'title' => 'Registration Page',
			
		];
		return view('auth/v_registration', $data);
	}

	public function register()
	{
		dd($this->request->getVar());
	}

    
}

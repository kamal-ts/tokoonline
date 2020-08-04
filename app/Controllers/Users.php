<?php namespace App\Controllers;

class Users extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'User Data',
			
		];
		return view('users/v_list', $data);
	}

}
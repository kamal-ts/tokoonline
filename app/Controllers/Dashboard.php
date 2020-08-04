<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'Dashboard',
			
		];
		return view('v_dashboard', $data);
	}

}

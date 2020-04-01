<?php namespace App\Controllers;

class Home extends Core\BaseAdmin
{
	public function index()
	{
		$data['mytitle'] = 'Dashboard';
		$data['notification'] = '';
    	return view('modules/dashboard/home', $data);
	}

	public function tes()
	{
		show_404();
	}

	public function dash(){
		$data['mytitle'] = 'Dashboard';
		$data['notification'] = '';
    	return view('modules/dashboard/home', $data);
	}
}
<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Home";
		echo view('template/header', $data);
		echo view('index');
		echo view('template/footer');
	}

	public function login()
	{
		$data['title'] = "Login";
		echo view('template/header', $data);
		echo view('login');
	}

	public function register()
	{
		$data['title'] = "Registration";
		echo view('template/header', $data);
		echo view('registration');
	}

	public function about()
	{
		$data['title'] = "About";
		echo view('template/header', $data);
		echo view('about');
		echo view('template/footer');
	}

	public function detail()
	{
		$data['title'] = "YasminFoodies";
		echo view('template/header', $data);
		echo view('detail');
		echo view('template/footer');
	}

	public function admin()
	{
		echo view('admin');
	}
}

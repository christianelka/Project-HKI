<?php

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_user');
	}

	public function index()
	{
		return redirect()->to(base_url);
	}

	public function registrasi()
	{
		$this->load->view('template/header');
		$this->load->view('sso/registrasi');
		$this->load->view('template/footer');
	}

	public function login($uname='')
	{
		$this->Mod_user->login($uname);
	}

	public function logout()
	{
		$this->Mod_user->logout();
	}

}
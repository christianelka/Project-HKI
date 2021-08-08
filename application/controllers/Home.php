<?php

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Mod_user');
	}

	public function index()
	{
		$this->load->model('Mod_home');

		if($this->session->has_userdata('data_user')){
			$data['user'] = $this->session->userdata('data_user')[0];
		}

		$data['fakultas'] = $this->Mod_home->getfak();
		$this->load->view('template/header', $data);
		$this->load->view('page/index2', $data);
		$this->load->view('template/footer');
	}

}
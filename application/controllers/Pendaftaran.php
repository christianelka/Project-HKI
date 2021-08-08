<?php

class Pendaftaran extends CI_Controller {

	public function index()
	{
		return redirect()->to(base_url);
	}

	public function merek()
	{
		$this->load->view('template/header');
		$this->load->view('pendaftaran/merek');
		$this->load->view('template/footer');
	}
	
	public function paten()
	{
		$this->load->view('template/header');
		$this->load->view('pendaftaran/paten');
		$this->load->view('template/footer');
	}

	public function hak_cipta()
	{
		$this->load->view('template/header');
		$this->load->view('pendaftaran/hc');
		$this->load->view('template/footer');
	}		

	public function desain_industri()
	{
		$this->load->view('template/header');
		$this->load->view('pendaftaran/di');
		$this->load->view('template/footer');
	}	
	
}
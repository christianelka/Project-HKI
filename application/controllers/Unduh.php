<?php

class Unduh extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_unduh');
    }

    public function index()
    {
        redirect(base_url());
    }

    public function form($category)
    {
        $this->Mod_unduh->getFile($category);
    }



}
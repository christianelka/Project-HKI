<?php

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('data_user') or $this->session->userdata('data_user')[0]['level'] == 0 ){
            // $this->load->view('admin_panel/template/detector');
		    return redirect()->to(base_url);
        }
    }

    public function index()
    {
        redirect(base_url()."admin/dashboard");
    }

    public function dashboard()
    {
        // if(!$this->session->has_userdata('data_user')){
            // $this->load->view('admin_panel/template/detector');
		    // return redirect()->to(base_url);
        // }else{
            
            $core = $this->session->userdata('data_user')[0];
            $data['uname'] = $core['uname'];
            $data['email'] = $core['email'];
            
            if($this->session->userdata('data_user')[0]['level'] == 1 ){
                $direct = 'admin_panel/superadmin/index';
            }elseif ($this->session->userdata('data_user')[0]['level'] == 2) {
                $direct = 'admin_panel/reviewer/index';
            }else{
                $direct = 'admin_panel/template/detector';
            }
            
            $this->load->view('admin_panel/template/header.php', $data);
            $this->load->view($direct);
            $this->load->view('admin_panel/template/navbar.php', $data);

        // }


    }

}